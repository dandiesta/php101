<?php
$var = 5;

function factorial($number){
	$result = 1;

	for ($i=1; $i <=$number; $number--) {
		$result *= $number;
	}
	return $result;
}

echo ("The factorial of " . $var . " is " .factorial($var));

?>