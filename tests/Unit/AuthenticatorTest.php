<?php

beforeEach(function () {
    $this->auth = new \Core\Authenticator();
    $this->config = require './config.php';
    $this->db = new Core\Database($this->config['database']);
});

it('can connect to database and authenticate an existing user.', function () {
    $login = $this->auth->attempt($this->db, 'email@test.com', 'password');
    expect($login)->toBeTrue();
});

it('can fail if no matching user in database.', function () {
    $login = $this->auth->attempt($this->db, 'empty@test.com', 'password');
    expect($login)->toBeFalse();
});
