<?php

namespace App\Model;
use \PDO;

class PostManager extends ManagerBase
{
    protected $db;

public function __construct(){

    $this->db = self::connect();
}


    public function getPosts()
    {
       $req = $this->db->query('SELECT * FROM post');
       $result = $req->fetch();
       var_dump($result);
       die();
       return $result;
    }


    /* récupération du Chapitre en fonction de l'Id

    public function getPost($postId)
    {
        $sql = 'SELECT id, Author, Title, Content FROM post WHERE id = ?';


        $req = $db->prepare($sql);
        $req->execute(array($postId));
        $post = $req->fetch();
        return $post;
    }


    //insertion du dernier chapitre ecrit par l'auteur dans la table post


    public function postChapter($Author, $Title, $Content)
    {
        $sql ='INSERT INTO post (Author, Title, Content) VALUES(:Author, :Title, :Content)';


        $lastchapter = $db->prepare($sql);
        $lastchapter->execute(array(
            'Author'=>$Author,
            'Title' => $Title,
            'Content' => $Content
        ));
        return $lastchapter;
    }

    //suppression par l'auteur d'un chapitre en fonction de l'id présent dans la base de données

    public function suppPost($id)

    {
        $sql = 'DELETE FROM post WHERE id= :id';


        $report = $db->prepare($sql);
        $report->execute(array(
            'id' =>$id
        ));
    }*/
}
