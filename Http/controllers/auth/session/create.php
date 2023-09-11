<?php

use Core\Session;

view('auth/session/create.php', [
    "errors" => Session::get('errors'),
    "old" => Session::get('old') ?? false
]);
