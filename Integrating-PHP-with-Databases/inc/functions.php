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

function random_catalog_array(){
    include "connection.php";
    
    try{
    //variable stores results of SELECT query
    $results = $db->query("SELECT media_id, title, category, img 
                            FROM Media
                            ORDER BY RAND()
                            LIMIT 4");
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
        $results = $db->prepare("SELECT title, category, img, format, year, genre, publisher, isbn 
                                FROM Media
                                JOIN Genres ON Media.genre_id = Genres.genre_id
                                LEFT OUTER JOIN Books ON Media.media_id = Books.media_id
                                WHERE Media.media_id = ?"
                             );  //? unnamed placement holder
        //Changes the ? to $id in a way that protects from SQL injection
        $results->bindParam(1,$id,PDO::PARAM_INT); //Specifies data type for PDO
        //Runs SQL query and loads result set into $results
        $results->execute();
    }catch(Exception $e){
        echo "Unable to retrieve results";
        exit;
    
    }
    
    $item = $results->fetch();
    if (empty($item)) return item; //early return for conditional boolean false
    try{
        //variable stores results of SELECT query
        $results = $db->prepare("SELECT fullname, role 
                                FROM Media_People
                                JOIN People ON Media_People.people_id = People.people_id
                                WHERE Media_People.media_id = ?"
                             );  //? unnamed placement holder
        //Changes the ? to $id in a way that protects from SQL injection
        $results->bindParam(1,$id,PDO::PARAM_INT); //Specifies data type for PDO
        //Runs SQL query and loads result set into $results
        $results->execute();
    }catch(Exception $e){
        echo "Unable to retrieve results";
        exit;
    
    }
    //Fetch each person
    while($row = $results->fetch(PDO::FETCH_ASSOC)){
        $item[$row["role"]][] = $row["fullname"];
    }
    return $item;
}

function get_item_html($item) {
    $output = "<li><a href='details.php?id="
        . $item["media_id"] . "'><img src='" 
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