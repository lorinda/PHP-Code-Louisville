<?php
class Recipe
{
    private $title;
    public $dryIngredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Alena Holligan";
    
    public function setTitle($title){
        $this->title = ucwords($title);//uppercase first word
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function displayRecipe()
    {
        return $this->title." by ". $this->source;   
    }
}

$recipe1 = new Recipe();
$recipe1->source = "Grandma Holligan";
$recipe1->setTitle("my first Recipe");

$recipe2 = new Recipe();
$recipe2->source = "Duncan Hines";
$recipe2->setTitle("My Second Recipe");

echo $recipe1->displayRecipe().PHP_EOL;
echo $recipe2->displayRecipe().PHP_EOL;
echo $recipe1->getTitle();

?>