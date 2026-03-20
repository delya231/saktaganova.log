<?php

return[
  '~^test/$~' => [\src\controllers\TestController::class,'view'],  
 '~^$~' => [\src\controllers\MainController::class,'main'], 

]; 