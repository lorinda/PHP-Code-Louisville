<?php

class Render
{
    public static function displayRecipe($recipe)
    {
        $output = "";
        $output .= $recipe->getTitle()." by ". $recipe->getSource();
        $output .= "\n";
        $output .= implode(", ", $recipe->getTags());
        $output .= "\n\n";
        foreach ($recipe->getIngredients() as $ing){
            $output .= $ing["amount"]. " " . $ing["measure"]. " " .$ing["item"];
            $output .= "\n";
        }
        $output .= "\n";
        $output .= implode("\n", $recipe->getInstructions());
        $output .= "\n";
        $output .= $recipe->getYield();
        return $output;
    }
    
}

?>