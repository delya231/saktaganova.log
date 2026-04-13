<div class="container">
    <?php if (empty($_GET['q'])): ?>
        <h1>Поиск по сайту</h1>
        <article class="article-card">
            <form action="">
                <label class="search" for="search">Введите запрос</label>
                <input class="form-control" type="text" name="q" id="search">
                <button class="btn-more" type="submit">Отправить</button>
            </form>
        </article>
    <?php else: ?>
        <h1>Результаты поиска</h1>
        <h3>По запросу: <?= $_GET['q'] ?></h3>
        <div class="articles-list">
            <?php foreach ($articles as $article): ?>
                <article class="article-card">
                    <?php if ($article->getImg() !== null) : ?>
                        <div class="card-image">
                            <img src="<?= $article->getImg() ?>" alt="<?= htmlspecialchars($article->getName()) ?>">
                        </div>
                    <?php endif; ?>

                    <div class="card-content">
                        <h3><?= htmlspecialchars($article->getName()) ?></h3>
                        <p class="author">Автор: <span><?= htmlspecialchars($article->getAuthor()->getNickname()) ?></span></p>
                        <p class="excerpt"><?= mb_strimwidth(htmlspecialchars($article->getText()), 0, 150, "...") ?></p>

                        <div class="card-footer">
                            <a href="articles/article/<?= $article->getId() ?>" class="btn-more">Подробнее</a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
<style>
    .container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .posts-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    /* Кнопка "Добавить" */
    .btn-add {
        background-color: #48bb78;
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 600;
        transition: background 0.3s;
    }

    .btn-add:hover {
        background-color: #38a169;
    }

    /* Список карточек */
    .articles-list {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    .article-card {
        display: flex;
        justify-content: space-between;
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        border: 1px solid #edf2f7;
        transition: transform 0.2s;
    }

    .article-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }

    /* Картинка в списке */
    .card-image {
        width: 250px;
        min-width: 250px;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Контент карточки */
    .card-content {
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-content h3 {
        margin: 0 0 10px 0;
        color: #2d3748;
        font-size: 1.25rem;
    }

    .author {
        font-size: 0.85rem;
        color: #718096;
        margin-bottom: 12px;
    }

    .author span {
        color: #4a5568;
        font-weight: 600;
    }

    .excerpt {
        color: #4a5568;
        line-height: 1.6;
        margin-bottom: 15px;

        /* Основные правки здесь: */
        max-width: 500px;
        /* Ограничиваем ширину текста внутри блока */
        white-space: normal;
        /* Разрешаем перенос строк */
        overflow-wrap: break-word;
        /* Переносим слишком длинные слова */
        word-break: break-word;
    }

    /* Кнопка "Подробнее" */
    .btn-more {
        color: #3182ce;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        border: none;
    }

    .btn-more:hover {
        color: #2b6cb0;
        text-decoration: none;


    }

    .form-control {
        margin: 20px;
       padding: 10px;
        border: 2px solid #3182ce ;
        border-radius: 7px;
    }
    .search{
        margin-left:20px;
        font-size: 20px;
        font-weight:bolder;
        color:#3182ce;
    }

</style>