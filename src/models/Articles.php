<?php

namespace src\models;

use src\services\Db;
use src\exceptions\InvalidArgumentException;

class Articles extends ActiveRecordEntity
{

    protected $author_id;
    protected $name;
    protected $text;
    protected $created_at;
    protected $img;


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
    public function updateFromArray(array $fields, $imgFile)
    {
        var_dump($imgFile);
        if (empty($fields['name'])) {
            throw new \InvalidArgumentException('не передано название статьи');
        }
        if (empty($fields['text'])) {
            throw new \InvalidArgumentException('не передан текст статьи');
        }

        $this->name = $fields['name'];
        $this->text = $fields['text'];


        if (!empty($imgFile['name'])) {
            $filePath = 'uploads/' . $imgFile['name'];
            $this->img = $filePath;

            if (!move_uploaded_file($imgFile['tmp_name'], $filePath)) {
                throw new InvalidArgumentException('Ошибка при загрузке файла');
            }
        }

        $this->save();
        return $this;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setText($text)
    {
        $this->text = $text;
    }
    public function setAuthorId($author_id)
    {
        $this->author_id = $author_id;
    }
    public function getImg()
    {
        return $this->img;
    }
    public static function create(array $fields, array $imgFile, Users $author): Articles
    {
        if (empty($fields['name'])) {
            throw new \InvalidArgumentException('не передано название статьи');
        }
        if (empty($fields['text'])) {
            throw new \InvalidArgumentException('не передан текст статьи');
        }
        if ($imgFile['size'] > 10 * 1024 * 1024) {
            throw new \InvalidArgumentException('Слишком большой файл! Должно быть не более 10МБ');
        }

        $article = new Articles();
        $article->name = $fields['name'];
        $article->text = $fields['text'];
        $article->author_id = $author->getId();

        if (!empty($imgFile['name'])) {
            $filePath = 'uploads/' . $imgFile['name'];
            $article->img = $filePath;

            if (!move_uploaded_file($imgFile['tmp_name'], $filePath)) {
                throw new InvalidArgumentException('Ошибка при загрузке файла');
            }
        }

        $article->save();
        return $article;
    }

    public static function searchByName(string $searchString)
    {
        return parent::search('name', $searchString);
    }
}
