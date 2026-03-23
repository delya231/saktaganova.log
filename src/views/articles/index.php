 <section class="posts">
<div class="container">
<h1>Статьи</h1>
<?php foreach($articles as $article): ?>
    <h3><?= $article['name'] ?></h3>
     <p><?= $article['text'] ?></p>
     <hr>
<?php endforeach; ?>

            </div>
        </section>
        <div>

        </div>
