<?php
beforeEach( function () {
    $this->config = require './config.php';
    $this->db = new Core\Database($this->config['database']);
});

it('can validate user details.', function () {
    $validation = \Http\Forms\RegisterUser::validate([
        'email' => 'new@test.com',
        'password' => 'password'
    ]);

    expect($validation)->toBeInstanceOf(\Http\Forms\RegisterUser::class);
});

it('can catch an email that exists in database.', function () {
    $validation = new \Http\Forms\RegisterUser([
        'email' => 'email@test.com',
        'password' => 'password'
    ]);

    $exists = $validation->exists($this->db, 'email@test.com');

    expect($exists)->toBeTrue();
});

it('can confirm an email that does not exist in database.', function () {
    $validation = \Http\Forms\RegisterUser::validate([
        'email' => 'new@test.com',
        'password' => 'password'
    ]);

    $exists = $validation->exists($this->db, 'wrong@test.com');

    expect($exists)->toBeFalse();
});

it('can register a new user to database.', function () {
    $validation = \Http\Forms\RegisterUser::validate($attributes = [
        'email' => 'new@test.com',
        'password' => 'password'
    ]);

    $user = $validation->register($this->db, $attributes);

    expect($user)->toBeInstanceOf(\Http\Forms\RegisterUser::class);
});
