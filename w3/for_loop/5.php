<?php

function factorial($number) {
	$orignum = $number;
	$result =1;

	for ($i=0; $i<$number; $number--) {
		$result *= $number;

	}
	echo "The factorial of $orignum is $result";
}

factorial(4);

?>