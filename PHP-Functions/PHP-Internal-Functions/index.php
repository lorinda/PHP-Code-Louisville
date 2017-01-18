<?php  
	$phrase = "We only hit what we aim for";
	$len = strlen($phrase);
	echo $len."<br>";


	//echo substr - returns string starting at 0, 5 characters

	echo substr($phrase,0,5);


	//echo strpos - returns string position starting with 0
	echo "<br>".strpos($phrase, "hit");
	//returns 0,false if "bob" not found 
    var_dump(strpos($phrase, "bob"));

	
	$start = strpos($phrase, "hit");
    //echo string starting with $start
	echo substr($phrase, $start);

//PHP ARRAY FUNCTIONS
	$names_arr = array(
		"Mike" => "Frog",
		"Chris" => "Teacher",
		"Hampton" => "Teacher"
		);

	var_dump($names_arr);
	//array_keys()
	//shows key index and value
	var_dump(array_keys($names_arr));
	foreach(array_keys($names_arr) as $names) {
		# Shows phrase for each key value
		echo "Hello, $names","<br>";
	}
	echo "<br>";
	//array_walk()
	//applies a user supplied function to 
    //every member of an array

	function print_info($value, $key){
		echo "$key is a $value <br>";
	}
	array_walk($names_arr, 'print_info');
	





?> 