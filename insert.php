<?php

require_once 'functions.php';

$baslik = "This is a title!";
$explanation = "This is an explanation!";

//INSERT INTO
$insert = $db->prepare("INSERT INTO 'news'  ('id', 'title', 'explanation', 'date' VALUES (:i, :t, :e, :d)");
$insert->bindParam(":title", $title, PDO::PARAM_STR);
$insert->bindValue(":explanation", $explanation, PDO::PARAM_STR);
if($insert->execute()){
    echo "Successful!";
}else {
    echo "Not successfull!";
}

?>