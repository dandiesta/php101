<?php

$color = array(
	"A" => "Blue",
	"B" => "Green",
	"C" => "Red"
	);

echo "Original values.<br>";
print_r($color);


foreach ($color as $i => $value) {
	$lower = strtolower($value);
	$lColor[$i]= $lower;
}
echo "<br><br>Values in lowercase.<br>";
print_r($lColor);


foreach ($color as $i => $value) {
	$upper = strtoupper($value);
	$uColor[$i]= $upper;
}
echo "<br><br>Values in uppercase.<br>";
print_r($uColor);
?>