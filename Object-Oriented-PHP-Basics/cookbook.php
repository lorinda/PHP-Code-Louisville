<?php
include "classes/recipes.php";

$recipe1 = new Recipe();
$recipe1->setSource = "Grandma Holligan";
$recipe1->setTitle("my first recipe");
$recipe1->addIngredient("egg", 1, "doz");
$recipe1->addIngredient("flour", 2, "cup");

$recipe2 = new Recipe();
$recipe2->setSource = "Duncan Hines";
$recipe2->setTitle("my second recipe");

echo $recipe1->getTitle();
foreach ($recipe1->getIngredients() as $ing) {
    echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
}

$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");

echo implode("\n", $recipe1->getInstructions());

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

echo implode(", ", $recipe1->getTags()).PHP_EOL;

$recipe1->setYield("6 servings");

echo $recipe1->getYield().PHP_EOL;
echo $recipe1->getSource().PHP_EOL;