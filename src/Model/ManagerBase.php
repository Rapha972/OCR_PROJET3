<?php
/**
 * @ ouverture de l acces à la base de donnée
 */

class ManagerBase
{
    /**
     * @return PDO
     */
    protected function connect()
    {

        define('DSN','msql:host=localhost;dbname = BLOG; charset = utf8');
        define('USER','root');
        define('PWD','');
        try
        {
            $db = new PDO(DSN,USER,PWD);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


        }
        catch(PDOException $e)
        {
            die('erreur est:'.$e->getMessage());

        }






    }
}



