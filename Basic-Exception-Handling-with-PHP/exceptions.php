<?php

//turn of error display
ini_set('display_errors', 'Off');

//set up function for handling errors
function exception_error_handler($severity, $message, $file, $line){
    throw new ErrorException($message, 0, $severity, $file, $line);
}

//define function for handling errors
set_error_handler("exception_error_handler");

try {
    strpos();
}catch (Exception $e){
    echo "ERROR! ".$e->getMessage().PHP_EOL;
}


echo "End of file";

?>