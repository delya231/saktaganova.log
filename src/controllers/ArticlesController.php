<?php

namespace Src\Controllers;

use src\models\Articles;
use src\models\Users;
// use src\services\Db;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Articles::findAll();
        $this->view->renderHtml('articles/index.php', ['articles' => $articles]);
    }
    public function view($id)
    {
        $article = Articles::getById($id);
        if($article !== null){
          $this->view->renderHtml('articles/view.php', ['article' => $article]);
        }else{
              $this->view->renderHtml('errors/404.php', [], 404); 
        }
    }
    public function edit($id)
    {
        $article = Articles::getById($id);
        if($article === null){
            $this->view->renderHtml('errors/404.php',[], 404);
        }
        if(!empty($_POST)){
            $article->updateFromArray($_POST);
        }
            $this->view->renderHtml('articles/edit.php',['article'=> $article]);
       
    }
    public function delete($id)
    {
        $article = Articles::getById($id);
        if($article === null){
            $this->view->renderHtml('errors/404.php',[], 404);
        }
        $article->delete();
        
       
    }
    public function add(){
        $article = new Articles();
        $article->setName('Новая статья');
        $article->setText('Текст статьи');
        $article->setAuthorId(1);
        $article->save();
    }
}
