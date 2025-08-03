<?php foreach($categories as $category) { ?>
    <div id="<?= $category->editAreaId() ?>">
        <h2><?= $category->title() ?></h2>
        <a href="<?= $category->url() ?>">Подробнее</a>
        <ul>
        <?php foreach ($category->subSections() as $subsection) { ?>
            <li>
                <a href="<?= $subsection->url()?>"><?= $subsection->title() ?></a>
            </li>
        <?php } ?>
        </ul>
    </div>
<?php } ?>