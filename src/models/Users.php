<?php
namespace src\models;
use src\services\Db;
class Users extends ActiveRecordEntity
{

protected $id;
protected $nickname;
protected $email;
protected $is_confirmed;
protected $password_hash;
protected $created_at;



public function getNickname():string
{
    return $this->nickname;
}
public function getEmail():string
{
    return $this->email;
}

public function getId():int
{
    return $this->id;
}
// public static function getById($id): ?self{
//  $db = Db::getInstance();
// $entities = $db->query('SELECT * FROM `users` WHERE id = :id;',[':id'=>$id], static::class);
// return $entities ? $entities[0] : null;
// }
protected static function getTableName():string{
    return 'users';
}

}