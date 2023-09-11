<?php

use Core\Session;

view('auth/registration/register.php', [
    "errors" => Session::get('errors'),
    "old" => Session::get('old') ?? false
]);
