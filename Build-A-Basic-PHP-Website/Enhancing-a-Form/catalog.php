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

<div class="section catalog page">
    <div class = "wrapper">
        <h1><?php if ($section != null){
            //&gt; is greater than symbol
            echo "<a href='catalog.php'>Full Catalog</a> &gt;"; 
            }
            echo $pageTitle; ?></h1>
        <ul class="items">
            <?php
                $categories = array_category($catalog, $section);
                foreach($categories as $id => $item){
                    echo get_item_html($id, $catalog[$item]);
                    }
            ?>
        </ul>
    </div>
</div>

<?php include("inc/footer.php");