<?php 
$pageTitle = "Full Catalog";
$section = null;

//isset to correct for false categories
if(isset($_GET["cat"])){
    if($_GET["cat"] == "books"){
        $pageTitle = "Books";
        $section = "books";
    }else if($_GET["cat"] == "movies"){
        $pageTitle = "Movies";
        $section = "movies";
    }else if($_GET["cat"] == "music"){
        $pageTitle = "Music";
        $section = "music";
    }    
}

include("inc/data.php");
include("inc/functions.php");
include("inc/header.php"); 
?>