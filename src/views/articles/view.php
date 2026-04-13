<div class="article-item">
    <h1><?= htmlspecialchars($article->getName()) ?></h1>

    <div class="article-content">
        <?php if($article->getImg() !== null) : ?>
            <img class="img-fluid" src="<?= $article->getImg() ?>" alt="<?= htmlspecialchars($article->getName()) ?>">
        <?php endif; ?>
        
        <div class="article-body">
            <p><?= nl2br(htmlspecialchars($article->getText())) ?></p>
            <p class="article-author">Автор: <?= htmlspecialchars($article->getAuthor()->getNickname()) ?></p>
        </div>
    </div>

    <div class="article-actions">
        <!-- Кнопки без изменений -->
        <a href="/articles/article/<?= $article->getId() ?>/edit" class="btn-edit">Изменить</a>
        <form action="/articles/article/<?= $article->getId() ?>/delete" method="POST" style="display: inline;" onsubmit="return confirm('Вы уверены?')">
            <button type="submit" class="btn-delete">Удалить</button>
        </form>
    </div>
</div>









































 <style>

      .article-actions {
    margin-top: 20px;
    display: flex;
    gap: 15px;
    align-items: center;
}

.btn-edit, .btn-delete {
    padding: 8px 20px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s ease;
    border: none;
    display: inline-block;
}

.btn-edit {
    background-color: #e2e8f0;
    color: #4a5568;
}

.btn-edit:hover {
    background-color: #cbd5e0;
    color: #2d3748;
}


.btn-delete {
    background-color: #fff5f5;
    color: #e53e3e;
    border: 1px solid #feb2b2;
}

.btn-delete:hover {
    background-color: #e53e3e;
    color: white;
    border-color: #e53e3e;
}

.article-content {
    display: flex;
    gap: 20px;
    align-items: flex-start;
    margin-bottom: 20px;
}

.img-fluid {
    flex-shrink: 0; 
    width: 300px;  
    height: 200px; 
    object-fit: cover;
    border-radius: 8px;
}
.article-body p {
    margin: 0 0 10px;
    line-height: 1.5;
    font-size: 15px;
    
    word-wrap: break-word;      
    overflow-wrap: break-word;   
    word-break: break-word;      
}
.article-body {
    flex-grow: 1;
    min-width: 0; 
}
.article-author {
    font-style: italic;
    font-size: 0.9em;
    color: #718096;
}
</style>