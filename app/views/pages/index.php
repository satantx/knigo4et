<?php
$title = 'Книгочёт';

try {
    $authors = $pdo->query('SELECT * FROM authors ORDER BY name ASC')->fetchAll();
} catch (PDOException $e) {
    $error = 'Невозможно извлечь данные: ';
    echo $error . $e->getMessage();
    exit();
}

?>

<ul class="list">
    <? foreach ($authors as $author) { ?>
        <?php
        sortName($author['name']);
        ?>
    <li>
        <a href="/book?id=<?= $author['id'] ?>" class="list-item js-author" data-id="<?= $author['id'] ?>"><?= $author['name'] ?></a>
    </li>
    <? } ?>
</ul>
