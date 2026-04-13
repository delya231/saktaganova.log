<div class="edit-container">
    <h1>Редактирование статьи ✏️: <?= htmlspecialchars($article->getName()) ?></h1>
    
    <!-- Краткое превью текущего контента -->
    <div class="current-info">
        <p><strong>Автор:</strong> <?= htmlspecialchars($article->getAuthor()->getNickname()) ?></p>
    </div>

    <form action="" method="post" enctype="multipart/form-data" class="edit-form">
        <div class="form-group">
            <label for="name">Название статьи:</label>
            <input type="text" name="name" id="name" value="<?= htmlspecialchars($article->getName()) ?>" required>
        </div>

        <div class="form-group">
            <label for="text">Текст статьи:</label>
            <textarea name="text" id="text" rows="10"><?= htmlspecialchars($article->getText()) ?></textarea>
        </div>

        <div class="form-group">
            <label for="inputImg">Обновить изображение:</label>
            <input type="file" id="inputImg" class="file-input" name="img">
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-save">Обновить статью</button>
            <a href="/articles/article/<?= $article->getId() ?>" class="btn-cancel">Отмена</a>
        </div>
    </form>
</div>

<style>
    .edit-container {
    max-width: 800px;
    margin: 20px auto;
    padding: 30px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.edit-container h1 {
    color: #2d3748;
    font-size: 1.5rem;
    margin-bottom: 20px;
    border-bottom: 2px solid #edf2f7;
    padding-bottom: 10px;
}

.current-info {
    margin-bottom: 20px;
    color: #718096;
    font-size: 0.9rem;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: 600;
    margin-bottom: 8px;
    color: #4a5568;
}

/* Стили для текстовых полей */
.edit-form input[type="text"],
.edit-form textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    font-size: 16px;
    transition: border-color 0.2s;
    box-sizing: border-box; /* Важно, чтобы padding не расширял поле */
}

.edit-form input[type="text"]:focus,
.edit-form textarea:focus {
    outline: none;
    border-color: #3182ce;
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.1);
}

/* Кнопки */
.form-actions {
    display: flex;
    gap: 15px;
    align-items: center;
    margin-top: 30px;
}

.btn-save {
    background-color: #3182ce;
    color: white;
    padding: 10px 25px;
    border-radius: 6px;
    font-weight: 600;
    border: none;
    cursor: pointer;
    transition: background 0.3s;
}

.btn-save:hover {
    background-color: #2b6cb0;
}

.btn-cancel {
    color: #718096;
    text-decoration: none;
    font-size: 14px;
}

.btn-cancel:hover {
    text-decoration: underline;
}

/* Стилизация выбора файла */
.file-input {
    font-size: 14px;
    color: #4a5568;
}
</style>
