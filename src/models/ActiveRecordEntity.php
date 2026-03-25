<?php
namespace src\models;
use src\services\Db;
 abstract class ActiveRecordEntity{
    protected $id;
    public function getId():int
{
    return $this->id;
}
public static function findAll(): array
{
      $db = Db::getInstance();
     return $db->query('SELECT * FROM `' .static::getTableName(). '`;' ,[], static::class);
       
}
abstract protected static function getTableName():string;
 }