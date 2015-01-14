<?php

class Hello {
	function __construct($name) {
		echo "Hello All, I am " . $name;
	}
}

$class = new Hello("scott");

?>