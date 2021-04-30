<?php

define("_HOST", "localhost");
define("_DBNAME", "udemy");
define("_DBUSER", "root");
define("_DBPASS", "");

try {
    $db = new PDO("mysql:host="._HOST.";dbname="._DBNAME."", _DBUSER, _DBPASS);
    $db->exec("SET NAMES 'utf-8'; SET CHARSET 'utf-8' ");

}catch (PDOException $ex) {
    echo $ex->getMessage();
}
?>