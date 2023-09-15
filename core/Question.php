<?php

namespace Core;

class Question
{
    public string $title;
    public string $category;
    public string $tag;
    public int $id;
    public string $excerpt;
    public string $body;

    public function __construct(string $title = '', string $body = '', string $category = '', string $tag = '')
    {
        $this->title = trim($title) ?? '';
        $this->category = trim($category) ?? '';
        $this->tag = trim($tag) ?? '';
        $this->body = trim($body) ?? '';
        $this->excerpt = substr($this->body, 0, 120) ?? '';
    }

    /**
     * @param Database $db
     * @return void
     */
    public function save(Database $db): void
    {
        $categoryId = $this->insertOrUpdateCategory($db, $this->category);
        $tagId = $this->insertOrUpdateTag($db, $this->tag);

        $this->insertQuestion($db, $categoryId, $tagId);
    }

    /**
     * Save multiple questions into database
     * @param Database $db
     * @param array $batch
     * @return array
     */
    public function saveMany(Database $db, array $batch): array
    {
        return $this->insertQuestions($db, $batch);
    }

    /**
     * @param Database $db
     * @param string $category
     * @return int category_id
     */
    public function insertOrUpdateCategory(Database $db, string $category): int
    {
        $slug = strtolower($category);

        $existingCategory =  $db->query('select * from categories where name = :name', ["name" => $category])->find();

        if (!$existingCategory) {
            $db->query('INSERT INTO categories (name, slug) VALUES(:name, :slug)', params: [
                ":name" => $category,
                ":slug" => $slug
            ]);

            // return the id of the just-inserted category row
            return $db->connection->lastInsertId();
        }

        // return the category id
        return $existingCategory['id'];
    }

    /**
     * @param Database $db
     * @param string $tag
     * @return int tag_id
     */
    public function insertOrUpdateTag(Database $db, string $tag): int
    {
        $slug = strtolower($tag);

        $existingTag =  $db->query('select * from tags where name = :name', ["name" => $tag])->find();

        if (!$existingTag) {
            $db->query('INSERT INTO tags (name, slug) VALUES(:name, :slug)', params: [
                ":name" => $tag,
                ":slug" => $slug
            ]);

            // return the id of the just-inserted tag row
            return $db->connection->lastInsertId();
        }

        // return the tag id
        return $existingTag['id'];
    }

    /**
     * Check if question exists
     * @param string $questionBody This is the $body part of the question since each question has a unique body.
     * @param Database $db
     * @return bool
     */
    public function questionExists(string $questionBody, Database $db): bool
    {
        $query = 'select * from questions where body = :body';

        $exists = $db->query($query, [
            ":body" => $questionBody
        ])->find();

        return (bool)$exists;
    }

    /**
     * New Question
     * @param Database $db
     * @param int $categoryId
     * @param int $tagId
     * @return void
     */
    public function insertQuestion(Database $db, int $categoryId, int $tagId): void
    {
        $db->query("INSERT INTO questions (title, excerpt, body, category_id, tag_id) VALUES (:title, :excerpt, :body, :category_id, :tag_id)", params:[
            ":title" => $this->title,
            ":excerpt" => $this->excerpt,
            ":body" => $this->body,
            ":category_id" => $categoryId,
            ":tag_id" => $tagId
        ]);
    }

    /**
     * Insert Many Questions without the categories and tags tables.
     * In this case, each question row has the following fields:
     * id, title, excerpt, body, category, tag, created_at.
     * @param Database $db
     * @param array $batch
     * @return int[]
     */
    public function insertQuestions(Database $db, array $batch): array
    {
        $placeholders = [];
        $values = [];
        $batchSlugs = []; // slugs to create and update sitemap

        foreach ($batch as $index => $question) {
            // check if the question is already in db
            if ($this->questionExists($question['body'], $db) === false) {

                // generate slug
                $originalSlug = trim(str_replace(["`", "_", ":", "/", "\\", ".", ",", "?", " ", "   ", "  ", ": "], '-', $question['title']));

                $slug = $this->generateUniqueSlug($db, $originalSlug);
                $batchSlugs[] = $slug;

                // placeholders for db query
                $placeholders[] = "(:title{$index}, :excerpt{$index}, :body{$index}, :slug{$index}, :category{$index}, :tag{$index})";

                $values[] = [
                    ":title" . $index => trim($question['title']),
                    ":excerpt" . $index => substr(trim($question['body']), 0, 120),
                    ":body" . $index => trim($question['body']),
                    ":slug" . $index => strtolower($slug),
                    ":category" . $index => !empty(trim($question['category'])) ? trim($question['category']) : "Others",
                    ":tag" . $index => !empty(trim($question['tag'])) ? trim($question['tag']) : "Top writer"
                ];
            } else {
                return [
                    "status" => 0,
                    'failed' => 'Database',
                    'success' => 'exists',
                    "message" => "Database Error Occurred! The questions already exists."
                ];
            }
        }
        // flatten the values array
        $flattenedValues = [];
        foreach ($values as $row) {
            foreach ($row as $param => $value) {
                $flattenedValues[$param] = $value;
            }
        }
        $placeholdersString = implode(", ", $placeholders);
        $query = "INSERT INTO questions (title, excerpt, body, slug, category, tag) VALUES {$placeholdersString}";

        // save to db
        try {
            AppLog::logInfo(PHP_EOL.'Catching Error: ', [
                'query: ' => $query,
                'values: ' => $flattenedValues,
                'Total rows count' => count($values),
                'Total parameters count' => count($flattenedValues),
            ]);

            $db->query($query, $flattenedValues);

            AppLog::logInfo(PHP_EOL.'Placeholder string: ', [
                'query: ' => $query,
                'Total rows count' => count($values),
                'Total parameters count' => count($flattenedValues),
            ]);
        } catch (\PDOException $exception) {
            return [
                "status" => 0,
                'failed' => 'Database',
                'success' => null,
                "message" => "Database Error Occurred when trying to save the batch:\n {$exception}"
                ];
        }

        // generate sitemap
        try {
            $this->processSitemaps($batchSlugs);
        } catch (\Error $exception) {
            AppLog::logInfo(PHP_EOL.'Saved to db but failed to process sitemaps: ');
            return [
                "status" => 1,
                'success' => 'Database',
                'failed' => 'Sitemap',
                "message" => "Database Error Occurred when trying to save the batch:\n {$exception}"
            ];
        }
        AppLog::logInfo(PHP_EOL.'Saved and processed sitemaps: ');

        return [
            'status' => 1,
            'success' => 'Both',
            "failed" => null,
            "message" => 'Success. Saved and processed sitemaps'
        ];
    }

    /**
     * Slug generator
     * @param Database $db
     * @param string $originalString
     * @return string
     */
    public function generateUniqueSlug(Database $db, string $originalString): string
    {
        $slug = $originalString;
        $counter = 1;

        while ($this->isSlugTaken($db, $slug)) {
            $slug = $slug. '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    /**
     * Check if slug is taken
     * @param Database $db
     * @param string $slug
     * @return bool
     */
    public function isSlugTaken(Database $db, string $slug): bool
    {
        $query = "SELECT COUNT(*) as count FROM questions WHERE slug = :slug";
        $result = $db->query($query, [":slug" => $slug])->find();

        return $result['count'] > 0;
    }

    /**
     * Prepare and Update Sitemap i.e., public/sitemaps/posts_sitemap.xml
     * @param array $slugs
     * @return void
     */
    public function processSitemaps(array $slugs): void
    {
        $posts = [];
        foreach ($slugs as $slug) {
            $posts[] = [
                "loc" => BASE_URL . "/posts/{$slug}",
                "lastmod" => date("Y-m-d"),
                "changefreq" => "yearly",
                "priority" => 9.0
            ];
        }
        AppLog::logInfo(PHP_EOL.'Attempting to initiate sitemap generation: ', [
            'postsCount: ' => count($posts),
            'Total slugs: ' => count($slugs)
        ]);
        $sitemap = new Sitemap();
        $sitemap->generateOrUpdatePostsSitemap($posts);
    }
}
