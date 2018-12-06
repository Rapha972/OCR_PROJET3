<?php


require('/PROJET3/src/Controller/Frontend/HomeController/HomeController.php');

use App\Controller\Frontend\HomeController\HomeController;

$url = '';

if(isset($_GET['url'])){
    $url = $_GET['url'];

    
    
}

if($url === 'accueil'){
   //var_dump($url);
    //die();
    $home = new HomeController();
    $home->homePage();
}
/*elseif($url ==='book'){

    $chapter =  new ChapterManager();
    $chapter->chapter();

}
elseif($url ==='about'){

    $chapter =  new AuthorrManager();
    $chapter->chapter();

}
else
{
    header('index.php')
}*/