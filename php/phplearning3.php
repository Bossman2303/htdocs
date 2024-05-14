<?php

$fruits = ["apples", "oranges","bannana", "pears"];

echo count($fruits);
//count tells you how many items are in an array does not start at zero
echo"</br>";
var_dump(in_array("apples", $fruits));
//var dump tells you they type of item it is in this example a boolean
//in array checks if an items is in the array in this example checking if the string apples is in the array fruits

echo"</br>";

$fruits[] = "grapes";
//this is how you add a item to an array
//array_push($fruits, "grapes"); would do the same thing
//grapes is now a string inside of the array fruits

array_unshift($fruits, "mango");
//this adds and item to the beginning of an array instead of the end

array_pop($fruits);
//this will take off an item from the end of the array

array_shift($fruits);
//this will take off an item from the beginning of an array

unset($fruits[2]);
//This will get rid of a specific item in a array in this example the item in the 2 slot

print_r($fruits);

$chunked_array = array_chunk($fruits, 2);
//chunked array is the name of the new array
//array_chunk is a function that seperates an array into groups
//$fruits is the array that will be effected and 2 is how many items will be in each array group
echo"</br>";
print_r($chunked_array);

$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = [7,8,9];

$arr4 = array_merge($arr1, $arr2, $arr3);
//array_merge is a function that will combine arrays 
//$arr4 is the new array that will have the other arrays combined inside

$arr5 = [...$arr1, ...$arr2];
//the three dots are called a spread operator and will add the items of array 1 and 2 into array 5



echo"</br>";
print_r($arr4);
echo"</br>";
print_r($arr5);


$a = ["green", "red","yellow"];
$b = ["avacado", "apple","banana"];
$c = array_combine($a, $b);
//array_combine will use the first array as keys which are the numbers infront of the arrays
//the second array will be used as the values inside of the array


echo"</br>";
print_r($c);

$keys = array_keys($c);
//$keys is the nme of the new array being created
//array_keys will take the kesy from an array and make it the values for the new array

echo"</br>";
print_r($keys);

$flipped = array_flip($c);
//array_flip switches the keys and the values of an array

echo"</br>";
print_r($flipped);

$numbos = range(1,20);
//range creates an array with the numbers between the min and max

//array_map will go through each value in the array and pass it through the funciton as an argument
//the value from the array will be gotten with array_map an returhed as a string with the word number in front of it

$newnumbos = array_map(function($numbo){
    return "Number ${numbo} ";
},$numbos);
//$numbos is the name of the orignal array that is going to be used to find the values


//array_filter lets you filter through an array using a function
$lessthan10 = array_filter($numbos, function($numbo1){
   //the first $numbos is the original array that is being filtered through
//$numbo1 is the argument that the values from the array are going through
//all items in the array that are less than or equal to 10 are returned
//its kinda like array_filter filters out an array based on the function that you put in
    return $numbo1 <= 10;
});


echo"</br>";
print_r($lessthan10);

//the carry will start at zero and add each value from the funtion on top of it
//so in a way it would be similar to doing $numbo23 = $numbo23 + the next value from the array
$sum23 = array_reduce($numbos, function($carry, $numbo23){
//array_reduce lets you combine the values in an array using a function

    return $carry + $numbo23;
});

?>