<?php

$router ->get('/', 'index.php');
$router ->get('/PHP/Demo/about', 'about.php');
$router ->get('/PHP/Demo/contact', 'contact.php');

$router ->get('/PHP/Demo/notes' ,'notes/index.php')->only('auth');
$router ->get('/PHP/Demo/note' ,'notes/show.php');
$router ->delete('/PHP/Demo/note', 'notes/destroy.php');

$router ->get('/PHP/Demo/note/edit' ,'notes/edit.php');
$router ->patch('/PHP/Demo/note', 'notes/update.php');

$router ->get('/PHP/Demo/notes/create' ,'notes/create.php');
$router ->post('/PHP/Demo/notes' ,'notes/store.php');

$router ->get('/PHP/Demo/register', 'registration/create.php')->only('guest');
$router ->post('/PHP/Demo/register', 'registration/store.php')->only('guest');

$router ->get('/PHP/Demo/login', 'session/create.php')->only('guest');
$router ->post('/PHP/Demo/session', 'session/store.php')->only('guest');
$router ->delete('/PHP/Demo/session', 'session/destroy.php')->only('auth');