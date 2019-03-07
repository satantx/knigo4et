<?php

try {
    $authors = $pdo->query('SELECT * FROM authors ORDER BY name ASC')->fetchAll();
} catch (PDOException $e) {
    $error = 'Невозможно извлечь данные: ';
    echo $error . $e->getMessage();
    exit();
}

function sortName($title) {
	static $letter;
    $string = mb_substr($title, 0, 1);
    if ($letter !== $string) {
        echo '<li class="letter">'.$string.'</li>';
    }
    $letter = $string;
}