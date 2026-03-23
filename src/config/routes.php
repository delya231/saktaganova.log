<?php

return[
  '~^articles/$~' => [\src\controllers\ArticlesController::class,'index'], 
  '~^articles/article/(\d+)$~' => [\src\controllers\ArticlesController::class,'view'],
 '~^$~' => [\src\controllers\MainController::class,'main'], 

]; 