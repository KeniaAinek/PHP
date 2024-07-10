<?php
$config = require 'config.php';
$db = new Database($config['database']);

$heading = "New Note";

if($_SERVER['REQUEST_METHOD']){

}

require "./views/note-create.view.php";
?>