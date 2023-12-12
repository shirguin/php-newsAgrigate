<?php foreach ($categories as $category): ?>
    <div>
        <a href="<?= route('news.index', ['id_category' => $category['id']]) ?>">

            <h2>
                <?= $category['title'] ?>
            </h2>
        </a>
    </div>
<?php endforeach; ?>