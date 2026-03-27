<?php

return[
  '~^articles/$~' => [\src\controllers\ArticlesController::class,'index'], 
  '~^articles/add$~' => [\src\controllers\ArticlesController::class,'add'],
  '~^articles/article/(\d+)$~' => [\src\controllers\ArticlesController::class,'view'],
  '~^articles/article/(\d+)/edit$~' => [\src\controllers\ArticlesController::class,'edit'],
  '~^articles/article/(\d+)/delete$~' => [\src\controllers\ArticlesController::class,'delete'],
 '~^$~' => [\src\controllers\MainController::class,'main'], 

]; 