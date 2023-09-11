<?php
/**
 * WARNING - This test manipulates the real database connected to the application.
 * You should not run tests this way if you are working with a real application.
 * Consider creating stubs and factories and MAKE SURE YOU BACK UP YOUR DB.
 */

beforeEach( function () {
    $this->config = require './config.php';
    $this->db = new Core\Database($this->config['database']);
});

it('connects to database', function () {
    expect($this->db->connection)->toBeInstanceOf(PDO::class);
});

it('Create queries and fetches from database', function () {
    $query = $this->db->query('select * from questions limit 2');
    $result = $query->get();

    expect($result)->toBeArray()->and($result)->not->toBeEmpty();
});
