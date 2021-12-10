<?php

namespace App\Model;

use App\Model\BaseManager;

class PostManager extends BaseManager
{

    public function getPosts(int $number = null): array
    {
        return [];
    }
    public function savePost(){ 
        $con = new \PDO('mysql:host=db;dbname=mvc', 'root', 'example', [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ]);
    
        $query = $con->prepare("INSERT INTO posts (title, content) VALUES (:title, :content)");
        $query->bindParam(':title', $_POST['title']);
        $query->bindParam(':content', $_POST['content']);
        $query->execute();
        if ($query->execute()) {
            header('Location: /?p=get-post');
        }
    }
}
    