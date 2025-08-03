<h1><?= $category->title()?></h1>

<?php foreach ($category->elements() as $element) { ?>
    <div>
        <h2><?= $element->title() ?></h2>
        <p><?= $element->previewText() ?></p>
        <a href="<?= $element->url() ?>">Подробнее</a>
    </div>
<?php } ?>