<?php

namespace Core;

use PDO;
use PDOStatement;

class Database {
    public PDO $connection;
    protected PDOStatement $statement;

    public function __construct($config, $username = "root", $password = '')
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    /**
     * @param string $query
     * @param array $params
     * @return $this
     */
    public function query(string $query, array $params = []): static
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    /**
     * Limit
     * @param int $limit
     * @return Database
     */
    public function limit(int $limit): static
    {
        $this->statement->bindValue(':limit', $limit, PDO::PARAM_INT);
        return $this;
    }

    /**
     * Offset
     * @param int $offset
     * @return Database
     */
    public function offset(int $offset): static
    {
        $this->statement->bindValue(':offset', $offset, PDO::PARAM_INT);
        return $this;
    }

    /**
     * @return mixed
     */
    public function find(): mixed
    {
        return $this->statement->fetch();
    }

    /**
     * @return mixed
     */
    public function findOrFail(): mixed
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }

    /**
     * @return array|false
     */
    public function get(): bool|array
    {
        return $this->statement->fetchAll();
    }
}
