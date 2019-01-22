<?php


require('vendor/autoload.php');

use App\Controller\Frontend\HomeController\HomeController;

$url = '';

if(isset($_GET['url'])){
    $url = $_GET['url'];

    
    
}

if($url === 'accueil') {
    $home = new HomeController;
    $home->homePage();
}
/*
elseif($url ==='contact'){

    $chapter =  new ChapterManager();
    $chapter->chapter();

}
elseif($url ==='about'){

    $chapter =  new AuthorrManager();
    $chapter->chapter();

}
else {
    header ('Location:accueil');
    }
*/