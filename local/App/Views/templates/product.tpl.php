<h1><?= $product->title() ?></h1>
<p><?= $product->previewText() ?></p>
<p><?= $product->detailText() ?></p>
<p>Авторы:
    <ul>
    <?php foreach ($product->property('AUTHOR')->value() as $author) { ?>
        <li><?= $author->title() ?></li>
    <?php } ?>
    </ul>

</p>
<p>Страна: <?= $product->property('COUNTRY')->value()->title() ?>

</p>
<P>ISBN: <?= $product->property('ISBN')->value() ?></p>
<p>Упаковка: <?= $product->property('PACKAGE')->value() ?></p>
<p>Подкатегории:
    <ul>
    <?php foreach ($product->property('SUB_CATEGORIES')->value() as $subCategories) { ?>
        <li><?= $subCategories ?></li>
    <?php } ?>
    </ul>
</p>
<p>Цена: <?= $product->property('PRICE')->value() ?></p>
<p>Цена: <?= $product->priceWithDiscount() ?></p>

