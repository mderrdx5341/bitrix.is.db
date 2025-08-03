<?php
foreach ($news as $item)
{
    ?>
        <div id="<?= $item->editAreaId() ?>">       
            <h2><?= $item->title() ?></h2>
            <div><?= $item->date() ?></div>
            <div><?= $item->previewText() ?></div>
            <a href="<?= $item->url() ?>">Подробнее</a>
        </div>
    <?
}
?>