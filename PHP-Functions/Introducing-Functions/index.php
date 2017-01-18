<?php

//Create a function name(){}
//function Hello($name){
//    echo "Hello, $name";
//}
//
//Hello("Lorinda");

//passing argument by value: the default

//passing argument by reference: value can change through function

//function hello($name){
//    echo "Hello, $name, how's it going!";
//}

//Call the function
//hello("Hampton");


function hello($arr = 'friends'){
    if(is_array($arr)){
        //loop through $arr
        foreach($arr as $name){
            
            //<br> in echo for new line
            echo "Hello, $name. How's it going!<br>";
        }
    }else{
        echo "Hello, $arr, how's it going?";
    }
}

$names = array(
    'Bob',
    'Shelly');


hello($names);



$current_user = "Mike";


function is_mike(){
    //global variable outside of function used in function
    global $current_user;
    if($current_user == 'Mike'){
        echo '<html>It is Mike </html>';
    }
    else{
        echo 'It is not Mike';
    }
}

is_mike();



//PHP Function Default Arguments
//optional argument = NULL
    //Check with if statement
    //example: $title = NULL;
//default argument = "phrase"
    //example: $title = 'friend';
function get_info($name, $title=NULL){
   
    if($title){
        
        echo "<br>$name has arrived.  $name is with us as a $title";    
        
    }
    else{
        echo "<br>$name has arrived. Welcome!";
        
    }


}

get_info('Mike','frog');


?>