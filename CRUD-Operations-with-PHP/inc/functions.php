<?php
//application functions

function get_project_list(){
    include 'connection.php';
    try{
        return $db->query('SELECT project_id, title, category FROM projects');
    }catch(Exception $e){
        echo "Error!: ".$e->getMessage()."</br>";
        return array();
    }
}

function get_task_list($filter = null){
    include 'connection.php';
    $sql = 'SELECT tasks.*, projects.title AS project FROM tasks 
            JOIN projects ON tasks.project_id = projects.project_id';
    
    $orderBy = ' ORDER BY date DESC';
    if($filter){
        $orderBy = ' ORDER BY projects.title ASC, date DESC';
    }
    try{
        $results = $db->prepare($sql . $orderBy);
        $results->execute();
    }catch(Exception $e){
        echo "Error!: ".$e->getMessage()."</br>";
        return array();
    }
    return $results->fetchAll(PDO::FETCH_ASSOC);
}

function add_project($title, $category){
    include 'connection.php';
    
    $sql = 'INSERT INTO projects(title, category) 
            VALUES (:title, :category)';
    
    try{
        $results = $db->prepare($sql);
        $results->bindParam(":title", $title, PDO::PARAM_STR);
        $results->bindParam(":category", $category, PDO::PARAM_STR);
        $results->execute();
    }catch(Exception $e){
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}

function add_task($project_id, $title, $date, $time){
    include 'connection.php';
    
    $sql = 'INSERT INTO tasks(project_id, title, date, time) 
            VALUES (:project_id, :title, :date, :time)';
    
    try{
        $results = $db->prepare($sql);
        $results->bindParam(":project_id", $project_id, PDO::PARAM_INT);
        $results->bindParam(":title", $title, PDO::PARAM_STR);
        $results->bindParam(":date", $date, PDO::PARAM_STR);
        $results->bindParam(":time", $time, PDO::PARAM_INT);
        $results->execute();
    }catch(Exception $e){
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}