<?php

$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$length_temp = count($temp);

echo "Average Temperature is: ";

foreach ($temp as $x) {
	
	$sum +=$x;
}
$ave = $sum/$length_temp;
printf("%.2f", $ave);

echo "<br>List of seven lowest temperatures: ";
sort($temp);
for ($i=0; $i < 7; $i++) {
	echo $temp[$i] . ", ";
}

echo "<br>List of seven highest temperatures: ";
krsort($temp);

for ($i=($length_temp-7); $i < $length_temp; $i++) {
	echo $temp[$i] . ", ";
}

?>