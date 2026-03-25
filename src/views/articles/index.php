 <section class="posts">
<div class="container">
<h1>Статьи</h1>
<hr>
<?php foreach($articles as $article): ?>
    <h3><?= $article->getName() ?></h3>
     <p><?= $article->getText() ?></p>
     <p>Автор: <?= $article->getAuthor()->getNickname() ?></p>
     
     <a href="article/<?= $article->getId() ?>">Подробнее</a>
     <hr>
<?php endforeach; ?>

            </div>
        </section>
        <div>

        </div>
