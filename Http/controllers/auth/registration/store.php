<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Session;
use Http\Forms\RegisterUser;

$email = $_POST['email'];
$password = $_POST['password'];

$form = RegisterUser::validate($attributes = [
    'email'=> $email,
    'password'=>$password
]);

// if no errors, check if user exists
$db = App::resolve(Database::class);

if ($form->exists($db, $attributes['email'])) {
    Session::flash('old', [
        "email" => $email
    ]);

    $form->error('email', 'The email is taken, login instead!')->throw();
}

$form->register($db, $attributes);

$auth = new Authenticator();

$auth->login([
    'email' => $email
]);

redirect('/');

