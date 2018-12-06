<?php
/**
 * @ ouverture de l acces à la base de donnée
 */
function connect()
{

    define('DSN','msql:host=localhost;dbname = BLOG; charset = utf8');
    define('USER','root');
    define('PWD','root');


    $db = new PDO(DSN,USER,PWD);




}

