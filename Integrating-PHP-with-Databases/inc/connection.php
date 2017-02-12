<?php
$user = 'root';
$pass = '';
//variable name for object = $db
try{
    $db = new PDO("mysql:host=localhost;dbname=database", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  //throw an exception for any error
    
}catch (Exception $e){ 
    echo "Unable to connect";
    echo $e->getMessage();
    exit;
}

try{
    //variable stores results of SELECT query
    $results = $db->query("SELECT title, category, img FROM Media");
}catch(Exception $e){
    echo "Unable to retrieve results";
    exit;
    
}
echo "Retrieved Results";

//FETCH_ASSOC condenses reults to associative keys
var_dump($results->fetchAll(PDO::FETCH_ASSOC));

?>