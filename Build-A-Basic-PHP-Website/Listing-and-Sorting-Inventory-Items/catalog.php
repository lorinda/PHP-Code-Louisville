<?php 
$catalog = array("Design Patterns", 
                 "Forrest Gump", 
                 "Beethoven"
                );
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


include("inc/header.php"); 
?>

<div class="section catalog page">
    <div class = "wrapper">
        <h1><?php echo $pageTitle; ?></h1>
    </div>
</div>

<?php include("inc/footer.php");