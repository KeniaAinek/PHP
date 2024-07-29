<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Core\Authenticator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

//Validate the form input 
$errors = [];
if(!Validator::email($email)){
    $erros['email'] = 'Please provide a valid email address.';
}

if(!Validator::string($password,7, 255)){
    $erros['password'] = 'Please provide a password of at least seven characters.';
}

if (!empty($errors)){
    return view('registration/create.view.php', [
        'errors' => $errors,      
    ]);
}
//check if the account alredy exists

$user = $db->query('SELECT * FROM users WHERE email = :email',['email' => $email])-> find();

if($user){
     header('location: /login');
     exit();
}else{
    // If no, save  on the DB  
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)',[
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    //mark the user has logged in
    (new Authenticator)->login($user);

    redirect('/');
    exit();
}
