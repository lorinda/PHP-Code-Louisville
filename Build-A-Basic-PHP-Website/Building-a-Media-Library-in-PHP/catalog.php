<?php 
$pageTitle = "Full Catalog";
if($_GET["cat"] == "books"){
    $pageTitle = "Books";
}else if($_GET["cat"] == "movies"){
    $pageTitle = "Movies";
}else if($_Get["cat"] == "music"){
    $pageTitle = "Music";
}
include("inc/header.php"); 
?>

<div class="section page">
    <h1>Full Catalog</h1>
</div>

<?php include("inc/footer.php");