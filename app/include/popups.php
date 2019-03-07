<div class="modal" id="add-book">
    <div class="modal-main">
        <div class="modal-wrap">
            <div class="modal-title">Добавить книгу</div>
            <div class="input-block">
                <input type="text" name="title-book" class="input" placeholder="Название книги">
            </div>
            <div class="input-block">
                <select class="input select" name="id-author">
                    <? foreach ($authors as $key=>$author) { ?>
                    <option value="<?= $author['id'] ?>" <?= $title == $author['name'] ? 'selected' : '' ?>><?= $author['name'] ?></option>
                    <? } ?>
                </select>
            </div>
            <div class="input-block">
                <input type="checkbox" class="checkbox" id="add-checkbox">
                <label class="checkbox-label" for="add-checkbox">Наличие</label>
            </div>
        </div>
        <div class="modal-footer flex flex-right">
            <button class="button btn-cancel js-close"></button>
            <button class="button btn-save js-add-book"></button>
        </div>
    </div>
</div>
<div class="modal" id="add-author">
    <div class="modal-main">
        <form action="/app/author/add.php" method="post" class="form">
            <div class="modal-wrap">
                <div class="modal-title">Добавить автора</div>
                <div class="input-block">
                    <input type="text" name="add-author" class="input" placeholder="Имя автора">
                </div>
            </div>
            <div class="modal-footer flex flex-right">
                <button class="button btn-cancel js-close"></button>
                <button type="submit" class="button btn-save js-add-author"></button>
            </div>
        </form>
    </div>
</div>
<div class="modal" id="edit-author">
    <div class="modal-main">
        <form action="/app/author/update.php" method="post" class="form">
            <div class="modal-wrap">
                <div class="modal-title">Редактировать автора</div>
                <div class="input-block">
                    <input type="text" class="input" placeholder="Имя автора" name="author[<?= $authorId ?>]" value="<?= $titlePage ?>">
                </div>
            </div>
            <div class="modal-footer flex flex-right">
                <button type="submit" name="del" class="button btn-del"></button>
                <button class="button btn-cancel js-close"></button>
                <button type="submit" name="save" class="button btn-save js-update-author"></button>
            </div>
        </form>
    </div>
</div>
<div class="controls">
    <div class="group flex flex-column">
        <button class="button btn-author" data-modal="add-author"></button>
        <button class="button btn-book" data-modal="add-book"></button>
        <? if ($bookEdit) {?>
        	<button class="button btn-edit" data-modal="edit-author"></button>
    	<? } ?>
    </div>
    <button class="button btn-option"></button>
</div>

