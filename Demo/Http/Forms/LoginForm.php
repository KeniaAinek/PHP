<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;


class LoginForm
{
    protected $errors = [];

    public function __construct(public array $atributes){
        if(!Validator::email($atributes['email'])){
            $this->errors['email'] = 'Please provide a valid email address.';
        } 
        
        if(!Validator::string($this->$atributes['password'])){
            $this->errors['password'] = 'Please provide a valid password.';
        }
        
    }

    public static function validate($atributes){
        $instance = new static($atributes);
        if($instance->failed()){
            //throw new ValidationException();
            ValidationException::throw($instance->errors(), $instance->atributes);
        }
         return $instance;
    }
    
    public function failed(){
       return count($this->errors);
    }

public function errors(){
    return $this->errors;
}

public function error($field, $message){
    $this->errors[$field] = $message;
}

}