<?php

it('can validate email and password.', function () {
    $response = \Http\Forms\LoginForm::validate([
        'email' => 'example@email.com',
        'password' => 'passw0rd!'
    ]);
    expect($response)->toBeInstanceOf(\Http\Forms\LoginForm::class);
});

it('throws exception on wrong email format.', function () {
    $this->expectException(\Core\ValidationException::class);

    \Http\Forms\LoginForm::validate([
        'email' => 'invalid email',
        'password' => 'password0'
    ]);
});

it('throws exception on empty email.', function () {
    $this->expectException(\Core\ValidationException::class);

    \Http\Forms\LoginForm::validate([
        'email' => '',
        'password' => 'password0'
    ]);
});

it('throws exception on empty password.', function () {
    $this->expectException(\Core\ValidationException::class);

    \Http\Forms\LoginForm::validate([
        'email' => 'invalid email',
        'password' => ''
    ]);
});

it('catches errors on empty email.', function () {
    $validationErrors = [];
    try {
        \Http\Forms\LoginForm::validate([
            'email' => '',
            'password' => 'password'
        ]);
    } catch (\Core\ValidationException $validationException) {
        $validationErrors = $validationException->getErrors();
    }
    expect($validationErrors)->not->toBeEmpty();
});

it('catches validation errors on empty password.', function () {
    $validationErrors = [];
    try {
        \Http\Forms\LoginForm::validate([
            'email' => 'invalid email',
            'password' => ''
        ]);
    } catch (\Core\ValidationException $validationException) {
        $validationErrors = $validationException->getErrors();
    }
    expect($validationErrors)->not->toBeEmpty();
});
