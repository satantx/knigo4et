<?php

include '../config/bd.php';

$id = $_REQUEST['author-edit-id'];
$name = $_REQUEST['author-edit-name'];

if (isset($_POST['save'])) {
    $sql = 'UPDATE authors SET name = :name WHERE id = :id';
    $updateAuthor = $pdo->prepare($sql);
    $updateAuthor->execute([
       'name'=> $name,
       'id' => $id
    ]);

    header('Location: /book?id='.$id.'');
}
elseif (isset($_POST['del'])) {
    $sql = 'DELETE FROM authors WHERE id = :id';
    $delAuthor = $pdo->prepare($sql);
    $delAuthor->execute([
        'id' => $id
    ]);

    header('Location: /');
}
