<?php

return[
  '~^articles/$~' => [\src\controllers\ArticlesController::class,'index'], 
  '~^articles/article/(\d+)$~' => [\src\controllers\ArticlesController::class,'view'],
  '~^articles/article/(\d+)/edit$~' => [\src\controllers\ArticlesController::class,'edit'],
 '~^$~' => [\src\controllers\MainController::class,'main'], 

]; 