<?php

namespace App\Controller;

use App\Model\PostManager;

class AdminController extends BaseController
{
  public function executeAdmin(int $number = 5)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);

    return $this->render("Admin",[], "Frontend/admin");
  }
  
  public function executePostComments(int $number = 5)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);

    return $this->render("Post comments",[], "Frontend/post-comments");
  }

  public function executeDeleteComments(int $number = 5)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);

    return $this->render("Delete comments",[], "Frontend/delete-comments");
  }

  public function writePost(int $number = 5)
  {

    return $this->render("Write Article", "Frontend/write-article", []);
  }
  public function savePost(int $number = 5)
  {

    return $this->render("Save Article", "Frontend/save-article", []);
  }

  public function executeDeleteArticle(int $number = 5)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);

    return $this->render("Delete Article",[], "Frontend/delete-article");
  }

  public function executeUserList(int $number = 5)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);

    return $this->render("Userlist",[], "Frontend/userlist");
  }

  public function GetPost(int $number = 1)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);
    
    return $this->render("GetPost", "Frontend/get-post", []);
  }
  
}