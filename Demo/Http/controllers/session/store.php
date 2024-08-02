<?php

use Core\Authenticator; 
use Http\Forms\LoginForm;
use Core\Session;
use Core\ValidationException;


try{

$form = LoginForm::validate($atributes = [
    'email' => $_POST['emal'],
    'password' => $_POST['password']
]);
}catch(ValidationException $exeption){
    Session::flash('errors', $exception ->errors());
    Session::flash('old', $exception -> old());

    return redirect('/PHP/Demo/login');
}

    if((new Authenticator)->attempt($atributes['email'], $atributes['password'])){
        redirect('/'); 
    
    }  
        $form->error('email', 'No matching account found for that email and password.');



return redirect('/PHP/Demo/login');
