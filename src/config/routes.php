<?php

return[
  '~^articles/$~' => [\src\controllers\ArticlesController::class,'index'], 
  '~^articles/add$~' => [\src\controllers\ArticlesController::class,'add'],
  '~^articles/search$~' => [\src\controllers\ArticlesController::class,'search'],
  '~^articles/article/(\d+)$~' => [\src\controllers\ArticlesController::class,'view'],
  '~^articles/article/(\d+)/edit$~' => [\src\controllers\ArticlesController::class,'edit'],
  '~^articles/article/(\d+)/delete$~' => [\src\controllers\ArticlesController::class,'delete'],
  '~^users/signUp$~' => [\src\controllers\UsersController::class,'signUp'],
  '~^users/login$~' => [\src\controllers\UsersController::class,'login'],
  '~^users/logout$~' => [\src\controllers\UsersController::class,'logout'],
 '~^$~' => [\src\controllers\MainController::class,'main'], 

]; 