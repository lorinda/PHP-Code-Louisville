<?php
include "classes/recipes.php";
include "classes/render.php";
include "inc/recipes.php";

echo Render::displayRecipe($belgian_waffles);




//Comment: Previous code. Removed for include "inc/recipes.php"
//$recipe1 = new Recipe("my first recipe");
//$recipe1->setSource = "Grandma Holligan";
//$recipe1->addIngredient("egg", 1, "doz");
//$recipe1->addIngredient("flour", 2, "cup");
//
//$recipe2 = new Recipe("my second recipe");
//$recipe2->setSource = "Duncan Hines";
//$recipe1->addInstruction("This is my first instruction");
//$recipe1->addInstruction("This is my second instruction");
//
//$recipe1->addTag("Breakfast");
//$recipe1->addTag("Main Course");
//
//$recipe1->setYield("6 servings");
//
//
////Call static method
////echo Render::displayRecipe($recipe1);
//
////add to_string method in cookbook.php to display recipe title
//echo $recipe1."\n";
//echo new Render();

//Commented: Previous Echo statements
//echo $recipe1->getTitle();
//foreach ($recipe1->getIngredients() as $ing) {
//    echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
//}
//echo implode("\n", $recipe1->getInstructions());
//echo $recipe1->getYield().PHP_EOL;
//echo $recipe1->getSource().PHP_EOL;
//echo implode(", ", $recipe1->getTags()).PHP_EOL;


