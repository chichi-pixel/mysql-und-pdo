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

//..ERROR -> Notice: Undefined variable: db in C:\APACHEFORXAMMP\htdocs\pdokurs\functions.php on line 9

//Fatal error: Uncaught Error: Call to a member function prepare() on null in C:\APACHEFORXAMMP\htdocs\pdokurs\functions.php:9 Stack trace:
 //#0 {main} thrown in C:\APACHEFORXAMMP\htdocs\pdokurs\functions.php on line 9

