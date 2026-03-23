<?php

return[
  '~^articles/$~' => [\src\controllers\ArticlesController::class,'index'], 
  '~^article/(\d+)$~' => [\src\controllers\ArticlesController::class,'view'],
 '~^$~' => [\src\controllers\MainController::class,'main'], 

]; 