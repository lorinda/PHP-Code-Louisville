<?php

class Recipe
{
    private $title;
    private $ingredients = array();
    private $instructions = array();
    private $yield;
    private $tag = array();
    private $source = "Alena Holligan";
    
    private $measurements = array(
        "tsp",
        "tbsp",
        "cup",
        "oz",
        "lb",
        "fl oz",
        "pint",
        "quart",
        "gallon",
        "doz"
    );
    
    public function setTitle($title){
        $this->title = ucwords($title);//uppercase first word
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function addIngredient($item, $amount = null, $measure = null)
    {
        if ($amount != null && !is_float($amount) && !is_int($amount)) {
            exit("The amount must be a float: " . gettype($amount) . " $amount given");
        }
        if ($measure != null && !in_array(strtolower($measure), $this->measurements)) {
            exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
        }
        $this->ingredients[] = array(
            "item" => ucwords($item),
            "amount" => $amount,
            "measure" => strtolower($measure)
        );
       
    }
    
    
    public function getIngredients()
    {
        return $this->ingredients;
    }
    
    public function addInstruction($string)
    {
        $this->instructions[] = $string;
    }
    
    public function getInstructions()
    {
        return $this->instructions;
    }
    
    public function displayRecipe()
    {
        return $this->title." by ". $this->source;   
    }
}


?>