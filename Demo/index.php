<?php
require 'Database.php';
require 'functions.php';
//require 'router.php';





$db = new Database();
$posts = $db -> query("SELECT * FROM posts where id = 1")->fetch(PDO::FETCH_ASSOC);
dd($posts);
?>