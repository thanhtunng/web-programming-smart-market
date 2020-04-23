<?php

namespace App\Models;

class Post extends \Core\Model {
    public static function getAll() {
        try {
            $db = static::getDB();
            $stmt = $db->query('SELECT * FROM posts');
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}