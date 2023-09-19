<?php

namespace Core;

class Admin
{
    protected array $errors = [];
    public array $data;
    public string $path; // path to config.json

    /**
     * @param string $path // location of the config.json file. Default is 'storage/config.json
     */
    public function __construct(string $path = 'storage/config.json')
    {
        $this->path = basePath($path);
    }

    /**
     * @param array $attr
     * @return bool
     */
    public function validate(array $attr): bool
    {
        if (!Validator::string($attr['siteTitle'])) {
            $this->errors['siteTitle'] = "Invalid site title.";
        }
        if (!Validator::string($attr['siteExcerpt'])) {
            $this->errors['siteExcerpt'] = "Excerpt is invalid. Try keep it about 160 characters.";
        }
        if (!Validator::string($attr['siteTagline'])) {
            $this->errors['siteTagline'] = "Invalid site tagline.";
        }
        if (!Validator::url($attr['orderLink'])) {
            $this->errors['orderLink'] = "Invalid url for order link.";
        }
        if (!Validator::url($attr['loginLink'])) {
            $this->errors['loginLink'] = "Invalid url for login link.";
        }
        if (!Validator::email($attr['siteEmail'])) {
            $this->errors['siteEmail'] = "Invalid email address.";
        }

        return empty($this->errors);
    }

    /**
     * Update and save configuration data to json file
     * @param array $attr
     * @return bool|int
     */
    public function setup(array $attr): bool|int
    {
        // load old data
        $data = json_decode(file_get_contents($this->path), true);

        // update the old data with new
        foreach ($data as $key => $value) {
            if (array_key_exists($key, $attr)) {
                $data[$key] = $attr[$key];
            }
        }

        $result = json_encode($data, JSON_PRETTY_PRINT);

        if ($result === false) {
            $this->errors['jsonError'] = "Error parsing json data.";
            return false;
        }

        return file_put_contents($this->path, $result);
    }

    /**
     * Load site/admin data
     * @return Admin
     */
    public function loadInfo(): static
    {

        $this->data = json_decode(file_get_contents($this->path), true);

        return $this;
    }

    /**
     * Get admin email
     * @return string
     */
    public function adminEmail(): string
    {
        return $this->data['adminEmail'] ?? 'Not Set';
    }

    /**
     * Get admin password
     * @return string
     */
    public function adminPassword(): string
    {
        return $this->data['adminPassword'] ?? 'Not Set';
    }

    /**
     * Get site email
     * @return string
     */
    public function siteEmail(): string
    {
        return $this->data['siteEmail'] ?? 'Not Set';
    }

    /**
     * @return array
     */
    public function errors(): array
    {
        return $this->errors;
    }
}
