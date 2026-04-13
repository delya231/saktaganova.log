<?php
// spl_autoload_register(function (string $className) {
//     require_once __DIR__ . '/' . str_replace('\\', '/', $className . '.php');
// });


// $route = $_GET['route'] ?? '';
// $routes = require __DIR__ .'/src/config/routes.php';
// $isRouteFound = false;
// foreach($routes as $pattern => $controllerandAction)  {
//    preg_match($pattern, $route, $matches);
//    if(!empty($matches)){
//     $isRouteFound = true;
//     break;
//    }
// } 
// if(!$isRouteFound){
//     echo'Страница не найдена';
//   return;
// }
// $controllerName = $controllerandAction[0];
// $actionName = $controllerandAction[1];
// unset ($matches[0]);
// $controller = new $controllerName;
// $controller->$actionName(...$matches);
// //  var_dump($controllerandAction);
// //  var_dump($matches);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/">
    <title>Блог</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="/articles/">БлогДели📚</a>
            </div>
            <!-- <nav class="nav">
                <ul>
                    <li><a href="/articles">Статьи</a></li>
                    <li><a href="/blog">О блоге</a></li>
                    <li><a href="/users/login">Регистрация/Вход</a></li>
                </ul>
            </nav> -->
     <nav class="nav"> 
    <ul>

         <li><a href="/articles/search">Поиск</a></li>
        <li><a href="/articles/">Статьи</a></li>
        <li><a href="/blog/">О блоге</a></li>
        
        <?php if ($user): ?>
            <li><?= htmlspecialchars($user->getNickname()) ?></li>
            <li><a href="/users/logout">Выход</a></li>
        <?php else: ?>
            
            <li><a href="/users/signUp">Регистрация</a></li>
            <li><a href="/users/login">Вход</a></li>
        <?php endif; ?>
    </ul>
</nav>
        </div>
    </header>
    <section class="slog">
        <div class="container">
            <div class="slog-content">
                <h1>Добро пожаловать в блог</h1>
                <p>Истории, мысли и идеи о жизни, технологиях и творчестве. Присоединяйтесь к нашему сообществу!</p>
            </div>
        </div>
    </section>
    <main>
        <?= $content ?? 'Контент не загружен' ?>
        <!-- <section class="posts">
            <div class="container">

            </div>
        </section>
        <div>

        </div> -->
    </main> 
    <footer class="footer">
        <div class="fcontainer">
            <div class="footer-section">
                <h3>Контакты</h3>
                <p>ТГ : @yourBlog</p>
                <p>Телефон : +7(999)104-86-41</p>
                <p>Email : HistoryBlog@gmail.com</p>
            </div>
            <div class="footer-copyright">
                <h3>Все права защищены</h3>
                <p> ©2026 БлогДели </p>

            </div>
        </div>

    </footer>
</body>

</html>