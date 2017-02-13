<?php
function full_catalog_array(){
    include "connection.php";
    
    try{
    //variable stores results of SELECT query
    $results = $db->query("SELECT media_id, title, category, img FROM Media");
    }catch(Exception $e){
        echo "Unable to retrieve results";
        exit;
    
    }
    //echo "Retrieved Results";

    //FETCH_ASSOC condenses reults to associative keys
    //var_dump($results->fetchAll(PDO::FETCH_ASSOC));

    //Generate catalog array from database PDO
    $catalog = $results->fetchAll();
    return $catalog;
}

function single_item_array($id){
    include "connection.php";
    
    try{
    //variable stores results of SELECT query
    $results = $db->query("SELECT title, category, img, format, year, genre, publisher, isbn 
                            FROM Media
                            JOIN Genres ON Media.genre_id = Genres.genre_id
                            LEFT OUTER JOIN Books ON Media.media_id = Books.media_id
                            WHERE Media.media_id = $id"
                         );
    }catch(Exception $e){
        echo "Unable to retrieve results";
        exit;
    
    }
    //echo "Retrieved Results";

    //FETCH_ASSOC condenses reults to associative keys
    //var_dump($results->fetchAll(PDO::FETCH_ASSOC));

    //For single item, change fetchAll to fetch
    $catalog = $results->fetch();
    return $catalog;
}

function get_item_html($id,$item) {
    $output = "<li><a href='details.php?id="
        . $id . "'><img src='" 
        . $item["img"] . "' alt='" 
        . $item["title"] . "' />" 
        . "<p>View Details</p>"
        . "</a></li>";
    return $output;
}

function array_category($catalog,$category) {
    $output = array();
    
    foreach ($catalog as $id => $item) {
        if ($category == null OR strtolower($category) == strtolower($item["category"])) {
            $sort = $item["title"];
            $sort = ltrim($sort,"The ");
            $sort = ltrim($sort,"A ");
            $sort = ltrim($sort,"An ");
            $output[$id] = $sort;            
        }
    }
    
    asort($output);
    return array_keys($output);
}