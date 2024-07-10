<?php
// Connect to our MySQL database. 
class Database{

    public $connection;
    public $statement;
    public function __Construct($config, $username = 'root', $passowrd= ''){

        $dsn = 'mysql:'.http_build_query($config, '',';');

    $this -> connection = new PDO($dsn, 'root','', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    
    public function query($query, $params = []){
        $this->statement = $this ->connection -> prepare($query);
        $this->statement -> execute($params);
        return $this;
    }

    public function get(){
        return $this -> statement -> fetchAll();
    }

    public function find(){
        return $this->statement ->fetch();

    }

    public function findOrFail(){
        $result = $this->find();
        if(! $result){
            abort();
        }
        return $result;
    }

}
