
<?php
//This is how you  write php tags to run php code

echo"hi";
//echo lets you output strings integars and html into the website itself and works with multiple values
//you can also use print but it only works with one value

print_r([1,2,3]);
//this is a built in function that prints out whats inside of the parenthesis is works with arrays

var_dump("Hello");
//this tells you the type of variable that you have aswell as how many characters are in it


//variables must start with $
//variables must start with letter or underscore

$name = "matthew";
//this creates the variable named name with the string inside


echo $name;
//this prints the variable name

echo $name . "is 19 years old";
//the period lets you combine the variable with the string similar to a plus sign in javascript

define("HOST", "localhost");
define("DB_NAME", "dev_db");
//define is similar to constants the first string is the name and the second string is what is inside of the constant

echo HOST;

$array = [1,2,3,4,5];
$fruits = array("apples","oranges","fruits");
//these are both ways to create arrays

print_r($fruits);
//this allows you to print out the array

echo $fruits[1];

$hex = [
    "red" => "#f00",
    "blue" => "#00f",
    "green" => "#0f0",
    //this allows you to set values in an array to a string instead of the normal numbers
];

$person = [

"firstname" => "matthew",
"lastname" => "darden",
"age" => "19",

];

echo $person["firstname"];
//this lets me call a string from an array using its assigned string name instead of its index number


$people = [

   [
    "name" => "Matthew",
    "age" => "19",
   ] ,
   
   [
    "name" => "bob",
    "age" => "35",
   ] ,
   
   [
    "name" => "joe",
    "age" => "82",
   ] 
   ];

echo $people[1]["age"];



?>



