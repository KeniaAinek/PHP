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

$router ->get('/PHP/Demo/notes' ,'controllers/notes/index.php')->only('auth');
$router ->get('/PHP/Demo/note' ,'controllers/notes/show.php');
$router ->delete('/PHP/Demo/note', 'controllers/notes/destroy.php');

$router ->get('/PHP/Demo/note/edit' ,'controllers/notes/edit.php');
$router ->patch('/PHP/Demo/note', 'controllers/notes/update.php');

$router ->get('/PHP/Demo/notes/create' ,'controllers/notes/create.php');
$router ->post('/PHP/Demo/notes' ,'controllers/notes/store.php');

$router ->get('/PHP/Demo/register', 'controllers/registration/create.php')->only('guest');
$router ->post('/PHP/Demo/register', 'controllers/registration/store.php')->only('guest');

$router ->get('/PHP/Demo/login', 'controllers/session/create.php')->only('guest');
$router ->post('/PHP/Demo/session', 'controllers/session/store.php')->only('guest');
$router ->delete('/PHP/Demo/session', 'controllers/session/destroy.php')->only('auth');