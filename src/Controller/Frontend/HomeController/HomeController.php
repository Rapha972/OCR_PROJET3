<?php

namespace App\Controller\Frontend\HomeController;

use App\Model\PostManager;

class HomeController
{
   public function homePage()
   {
       $getPosts = new PostManager();
       //$posts = $getPosts->getPosts();
       $result = $getPosts->getAllPosts();
require('src/View/home/home.php');

   }
    
    
    
}
    
    