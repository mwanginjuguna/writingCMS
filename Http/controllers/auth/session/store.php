<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Http\Forms\LoginForm;

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$db = App::resolve(Database::class);
$signedIn = (new Authenticator)->attempt($db, $attributes['email'], $attributes['password']);

if (!$signedIn) {
    $form->error("email", "No Matching Records for that email and password!")
        ->throw();
}

redirect('/');
