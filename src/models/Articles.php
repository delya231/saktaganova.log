<?php

namespace src\models;

use src\services\Db;

class Articles extends ActiveRecordEntity
{

    protected $author_id;
    protected $name;
    protected $text;

    protected $created_at;


    public function getName(): string
    {
        return $this->name;
    }
    public function getText(): string
    {
        return $this->text;
    }
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }
    public function getAuthorId(): int
    {
        return $this->author_id;
    }
    public function getAuthor(): Users
    {
        return Users::getById($this->author_id);
    }
    // public static function getById($id): ?self
    // {
    //     $db = Db::getInstance();
    //     $entities = $db->query('SELECT * FROM `articles` WHERE id = :id;', [':id' => $id], static::class);
    //     return $entities ? $entities[0] : null;
    // }
    protected static function getTableName(): string
    {
        return 'articles';
    }
    public function updateFromArray(array $fields) {
        $this->name = $fields['name'];
        $this->text = $fields['text'];
        $this->save();
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setText($text){
        $this->text = $text;
    }
    public function setAuthorId($author_id){
        $this->author_id = $author_id;
    }
    
}
