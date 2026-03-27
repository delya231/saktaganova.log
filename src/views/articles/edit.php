<h1>Редактирование статьи ✏️:<?= $article->getName() ?></h1>
<p><?= $article->getText() ?></p>
<p>Автор: <?= $article->getAuthor()->getNickname() ?></p>
<form action="" method="post">
<label>Название статьи: <input type="text" name="name" value="<?= $article->getName() ?>"></label> <br>
<label>Текст статьи: <textarea name="text" rows="10" cols="80"><?= $article->getText() ?></textarea></label> <br>
<input type="submit" value="обновить">

</form>
