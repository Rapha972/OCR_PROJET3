<?php
/**
 * @ ouverture de l acces à la base de donnée
 */
namespace App\Model;
use \PDO;

class ManagerBase
{
    /**
     * @connexion à la base de donnée
     */
   protected function connect(){

        define ('DSN','mysql:host=localhost;dbname=BLOG;charset=utf8');
        define ('USER','root');
        define ('PWD','root');
        try{
            $db = new PDO(DSN, USER, PWD);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        catch (\Exception $e){

            die(' l\'erreur est de type:' .$e->getMessage());
        }
       return $db;

    }
}



