<?php

$authorId = $_REQUEST['id'];

try {
    $books = $pdo->query('SELECT * FROM books WHERE author = '.$authorId.' ORDER BY title ASC')->fetchAll();
    $author = $pdo->query('SELECT * FROM authors WHERE id = '.$authorId.' ORDER BY name ASC')->fetch();
}
catch (PDOException $e) {
    $error = 'Невозможно извлечь данные: ';
    echo $error . $e->getMessage();
    exit();
}

$titlePage = $author['name'];

$title = $titlePage;

$bookEdit = true;

?>

<ul class="list">
	<li><a href="/">Главная</a></li>
    <? foreach ($books as $book) { ?>
        <?php
        sortName($book['title']);
        ?>
        <li class="list-item js-book <?= $book['visible'] ? 'availability' : 'not-availability'; ?>"
            data-id="<?= $book['id'] ?>"
            data-modal="edit-book"
        ><?= $book['title'] ?></li>
    <? } ?>
</ul>
