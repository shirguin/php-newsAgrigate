<?php foreach ($news as $n): ?>
    <div style="border:1px solid green">
        <h2>
            <?= $n['title'] ?>
        </h2>
        <p>
            <?= $n['description'] ?>
        </p>
        <p>
            ID_CATEGORY:
            <?= $n['id_category'] ?>
        </p>
        <div>
            <strong>
                <?= $n['author'] ?> (
                <?= $n['created_at'] ?>)
            </strong>

            <a href="<?= route('news.show', ['id' => $n['id'], 'id_category' => $n['id_category']]) ?>">Далее</a>
        </div>
    </div>
<?php endforeach; ?>