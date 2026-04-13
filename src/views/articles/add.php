<div class="edit-container">
    <h1>Новая статья ✍️</h1>

    <?php if (!empty($error)) : ?>
        <div class="error-message"><?= $error ?></div>
    <?php endif ?>

    <form action="" method="POST" enctype="multipart/form-data" class="edit-form">
        <div class="form-group">
            <label for="inputName">Название статьи</label>
            <input type="text" id="inputName" name="name" class="form-control" value="<?= $_POST['name'] ?? '' ?>" placeholder="Введите заголовок...">
        </div>

        <div class="form-group">
            <label for="inputText">Текст статьи</label>
            <textarea id="inputText" name="text" class="form-control" rows="10" placeholder="О чем будет статья?"><?= $_POST['text'] ?? '' ?></textarea>
        </div>

        <div class="form-group">
            <label for="inputImg">Изображение для обложки</label>
            <input type="file" id="inputImg" class="file-input" name="img">
        </div>

        <div class="form-actions">
            <input type="submit" class="btn-save" value="Создать статью">
            <a href="/articles" class="btn-cancel">Назад к списку</a>
        </div>
    </form>
</div>
<style>
    /* Контейнер формы */
    .m-3.col-md-6 {
        max-width: 600px;
        margin: 40px auto !important; /* Центрируем форму */
        padding: 30px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        font-family: 'Segoe UI', sans-serif;
    }

    h1 {
        text-align: center;
        color: #2d3748;
        margin-bottom: 25px;
    }

    /* Сообщение об ошибке */
    p[style*="background-color: red"] {
        background-color: #fff5f5 !important;
        color: #e53e3e !important;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #feb2b2;
        font-size: 14px;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Поля ввода */
    .mb-3 {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        font-weight: 600;
        color: #4a5568;
        margin-bottom: 8px;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        font-size: 16px;
        box-sizing: border-box; /* Чтобы padding не раздувал ширину */
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .form-control:focus {
        outline: none;
        border-color: #3182ce;
        box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.1);
    }

    textarea.form-control {
        min-height: 180px;
        resize: vertical;
    }

    /* Кнопка */
    .btn-primary {
        width: 100%;
        background-color: #3182ce;
        color: white;
        border: none;
        padding: 14px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s;
        margin-top: 10px;
    }

    .btn-primary:hover {
        background-color: #2b6cb0;
    }

    /* Инпут файла */
    input[type="file"] {
        padding: 8px 0;
        border: none;
    }
</style>