<?php foreach ($articles as $article) : ?>
    <div class="article">
        <h1 class="article__title"><?= $article['title'] ?></h1>
        <p class="article__excerpt"><?= $article['excerpt'] ?></p>
        <date class="article__date"><?= $article['date'] ?></date>
    </div>
<?php endforeach; ?>