<?php
include "classes/recipes.php";
include "classes/render.php";
include "classes/recipecollection.php";
include "inc/recipes.php";

$cookbook = new RecipeCollection("Treehouse Recipes");
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dried_mushroom_ragout);
$cookbook->addRecipe($rabbit_catalan);
$cookbook->addRecipe($grilled_salmon_with_fennel);
$cookbook->addRecipe($pistachio_duck);
$cookbook->addRecipe($chili_pork);
$cookbook->addRecipe($crab_cakes);
$cookbook->addRecipe($beef_medallions);
$cookbook->addRecipe($silver_dollar_cakes);
$cookbook->addRecipe($french_toast);
$cookbook->addRecipe($corn_beef_hash);
$cookbook->addRecipe($granola);
$cookbook->addRecipe($spicy_omelette);
$cookbook->addRecipe($scones);

//for recipes tagged breakfast
$breakfast = new RecipeCollection("Favorite Breakfasts");
foreach($cookbook->filterByTag("breakfast") as $recipe){
    $breakfast->addRecipe($recipe);
}
echo Render::listRecipes($breakfast->getRecipeTitles());
//echo Render::displayRecipe($belgian_waffles);




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


