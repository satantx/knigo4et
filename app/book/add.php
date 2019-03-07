<?php

include '../config/bd.php';

$title = $_REQUEST['title'];
$author = $_REQUEST['author'];
$series = Null;
$visible = 1;

$addAuthor = $pdo->prepare('INSERT INTO books (title, series, author, visible) VALUES (:title, :series, :author, :visible)');

$addAuthor->execute([
    ':title' => $title,
    ':series' => $series,
    ':author' => $author,
    ':visible' => $visible
]);