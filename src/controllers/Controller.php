<?php

namespace Src\Controllers;

use src\views\View;
use src\services\Db;

class Controller
{
    public $view;
    public $layout = 'default';
    public function __construct()
    {
        $this->view = new View($this->layout);
    }

}
