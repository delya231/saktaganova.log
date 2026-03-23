<?php
namespace src\models;
use src\services\Db;
class Articles extends ActiveRecordEntity
{

private $author_id;
private $name;
private $text;

private $created_at;


public function getName():string
{
    return $this->name;
}
public function getText():string
{
    return $this->text;
}
public function getCreatedAt():string
{
    return $this->created_at;
}
public function getAuthorId():int
{
    return $this->author_id;
}
public static function getById($id): ?self{
 $db = new Db();
$entities = $db->query('SELECT * FROM `articles` WHERE id = :id;',[':id'=>$id], static::class);
return $entities ? $entities[0] : null;
}
protected static function getTableName():string{
    return 'articles';
}

}