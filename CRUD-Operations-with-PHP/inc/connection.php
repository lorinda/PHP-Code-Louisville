<?php
$user = "treehouse";
$pd = "w9fj3l45";
try{
    $db = new PDO('mysql:host=localhost;dbname=crud_database', $user,$pd);
    
    //throw an exception for any error
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    die($e->getMessage().PHP_EOL);
}
//var_dump($db);