<?php

//turn of error display
ini_set('display_errors', 'Off');

//set up function for handling errors
function exception_error_handler($severity, $message, $file, $line){
    throw new ErrorException($message, 0, $severity, $file, $line);
}

//set function for handling errors
set_error_handler("exception_error_handler");


//set up function for handling default (uncaught) exceptions
function exception_handler($e){
    echo "Uncaught exception ". $e->getMessage();
}

//set default exception handler
set_exception_handler("exception_handler");

try {
    strpos();
}catch (Exception $e){
    echo "ERROR! ".$e->getMessage().PHP_EOL;
}

//Will throw an exception 
echo 10/0;

echo "End of file";

?>