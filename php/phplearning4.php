<?php
$string = "Hello world";

echo strlen($string);
//strlen gets the length of a string starting at 1

echo "</br>";

echo strpos($string, "o");
//strpos lets you search for the first iteration of a specific string inside of another string
//in this case the letter o 

echo "</br>";

echo strrpos ($string, "o");
//strrpos lets you search for the last iteration of a specific string insid of another string
//in this case the letter o

echo "</br>";

echo strrev($string);
//strrev lets you reverse a string

echo "</br>";

echo strtolower($string);
//strtolower allows you to change all the letters in a string to lower case

echo "</br>";

echo strtoupper($string);
//strtoupper allows you to change all the letters in a string to upper case

echo "</br>";

echo str_replace("world", "everyone", $string);
//str_replace lets you replace a string with another
//in this case you are replacing the string world with the string everyone in the varialbe $string

echo "</br>";

echo ucwords($string);
//ucwords allows you to change the first letter of every word to upppercase

echo "</br>";

//substr lets you return a portion of a string based on the starting value and the ending value
echo substr($string, 0, 5);
//if there is no ending value then it will just go until the end of the string
echo substr($string, 5);

echo "</br>";

//str_starts_with checks a string to see if the string inputed is at the beginning and is case sensitive
if(str_starts_with($string, "Hello")){
    echo"yes";
}

echo "</br>";

//str_ends_with checks a string to see if the string inputed is at the end and is case sensitive
if(str_ends_with($string, "world")){
    echo"yes";
}

$string2 = "<script>alert(1)</script>";

echo htmlspecialchars($string2);
//htmlspecialchars makes anything in the string only html and in this situation
//it would stop ther script tags from running javascript this would also work with style tags
echo "</br>";



?>




