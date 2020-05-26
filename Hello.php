<?php 

// This is a single line comment.
# This is also a line comment.

/*
	This is a multiple line comment block that
	spans across more than one line
*/

// Assign value to variable
$color = "blue";

// Variable names in PHP are case-sensitive
$Color = "green";
	
echo "Hello, world" . "<br>";
echo "The color of the sky is " . $color . "<br>";
echo "The color of the sky is " . $Color . "<br>";
echo "----------------------------";
echo gettype($color) . "<br>";
?>