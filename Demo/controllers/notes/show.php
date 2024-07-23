<?php

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);

$currentUserId = 1;

if($_SERVER['REQUEST_METHOD'] === "POST"){
    //form submited. Delete the current note.
    $note = $db->query('SELECT * FROM notes WHERE id = :id', [
        'id' => $_GET['id']])->findOrFail();
    
        authorize($note['user_id'] === $currentUserId);

    $db ->query('DELETE FROM notes WHERE id = :id',[ 'id' => $_POST['id']
]);
 header('location: /PHP/Demo/notes');
 exit();
}else {


$note = $db->query('SELECT * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);

}
?>