 <section class="posts">
<div class="container">
<h1>Статьи</h1>
<?php foreach($articles as $article): ?>
    <h3><?= $article->getName() ?></h3>
     <p><?= $article->getText() ?></p>
     <hr>
     <a href="article/<?= $article->getId()?>">Подробнее</a>
<?php endforeach; ?>

            </div>
        </section>
        <div>

        </div>
