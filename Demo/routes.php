<?php
/* return [
    '/' => 'controllers/index.php',
    '/PHP/Demo/about' => 'controllers/about.php',
    '/PHP/Demo/notes' => 'controllers/notes/index.php',
    '/PHP/Demo/note' => 'controllers/notes/show.php',
    '/PHP/Demo/notes/create' => 'controllers/notes/create.php',
    '/PHP/Demo/contact' => 'controllers/contact.php'
]; */

$router ->get('/', 'controllers/index.php');
$router ->get('/PHP/Demo/about', 'controllers/about.php');
$router ->get('/PHP/Demo/contact', 'controllers/contact.php');

$router ->get('/PHP/Demo/notes' ,'controllers/notes/index.php');
$router ->get('/PHP/Demo/note' ,'controllers/notes/show.php');
$router ->delete('/PHP/Demo/note', 'controllers/notes/destroy.php');

$router ->get('/PHP/Demo/notes/create' ,'controllers/notes/create.php');
$router ->post('/PHP/Demo/notes' ,'controllers/notes/store.php');