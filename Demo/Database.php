<?php
// Connect to our MySQL database. 
class Database{

    public $connection;
    public function __Construct(){
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charser=utf8mb4";
    $this -> connection = new PDO($dsn);
    }

    public function query($query){
        


$statement = $this ->connection -> prepare($query);
$statement -> execute();
return $statement;
    }
}
