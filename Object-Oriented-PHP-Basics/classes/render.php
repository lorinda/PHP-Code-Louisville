<?php

class Render
{
    public static function displayRecipe($recipe)
    {
        return $recipe->title." by ". $recipe->source;   
    }
    
}

?>