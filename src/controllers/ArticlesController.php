<?php

namespace Src\Controllers;

use src\models\Articles;
use src\models\Users;
// use src\services\Db;

class ArticlesController extends Controller
{
    public function index()
    {
        // $db = new Db();
        $articles = Articles::findAll();
    //    $db->query('SELECT * FROM `articles`;' ,[], Articles::class);
        $this->view->renderHtml('articles/index.php', ['articles' => $articles]);
    }
    public function view($id)
    {
        // $article = Articles::getById($id);
       
        // if($article !== null){
        //      $author = Users::getById($article->getAuthorId());
        //   $this->view->renderHtml('articles/view.php', ['article' => $article, 'author' =>$author]);
        // }else{
        //       $this->view->renderHtml('errors/404.php', [], 404); 
        // }
        $article = Articles::getById($id);
        if($article !== null){
          $this->view->renderHtml('articles/view.php', ['article' => $article]);
        }else{
              $this->view->renderHtml('errors/404.php', [], 404); 
        }
       
       
    }
}
