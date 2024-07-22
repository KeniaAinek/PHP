<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if(!Validator::email($email)){
    $erros['email'] = 'Please provide a valid email address.';
}

if(!Validator::string($password,7, 255)){
    $erros['password'] = 'Please provide a valid password.';
}

if(! empty($errors)){
    return view('sessions/create.view.php', ['errors' => $errors]);
}

//match the credetials
$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

if(! $user){
    return view('sessions/create.view.php', [
        'errors' => 'No matching account found for that email address. '
    ]);
}

login([
    'email' => $email
]);