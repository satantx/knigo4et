<?php

include '../config/bd.php';

$name = $_REQUEST['add-author'];
$visible = 1;

try {
    $sql = 'INSERT INTO authors(name, visible) VALUES(:name, :visible)';
    $addAuthor = $pdo->prepare($sql);

    $addAuthor->execute([
        ':name' => $name,
        ':visible' => $visible
    ]);

    header('Location: /');

} catch( PDOException $e ) {
    // error message
}

