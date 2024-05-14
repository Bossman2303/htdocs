<?php

$age = 17;

if($age >= 18){
echo "You are an adult";
}
else {
    echo "You are a minor";
}


$posts = ["</br> first post"];

//empty checks if the array posts has a value inside of it
if(!empty($posts)){
    echo  $posts[0];
}
else{
    echo "</br> no posts";
}

echo !empty($posts) ? $posts[0] : "</br> posts are empty";
//!empty is checking if the array named posts is not empty
//the question mark acts as a if statment and if the previous statement in this case is the array empty
//after the question mark is what will happen if the previous statement is true in this case printing the string in the first array spot
//the colon acts as an else and is what will happen if the statement is false
//must have else after colon if no else is needed you can add null

$favcolor = "blue";

//a switch is useful when you have multiple ifs and else ifs
//the switch is being used on the variable favcolor
 
switch($favcolor){
    case "red":
       //case is checking if the string inside of the variable is equal
        echo "</br> your favorite color is red";
        //this is the code that will run if the case is true
        break;
        //you need a break to go to the next case
    case "blue";
        echo "</br> your favorite color is blue";
        break;
        //the defualt will run if none of the other cases above are true
        defualt:
        echo "Your favorite color isnt red or blue";
}


//with for loops there are three things you need to pass in
//the first is to initialize the variable which is setting it where the loop should start at
// the second is the condition that needs to be true for it to continue to loop
//and the third is how much it will increase with every cycle

for($x = 0; $x <=10; $x++){
    echo "</br>".$x;
}

$post = ["first post", "second post", "third post"];

//the first post is the array name and the second is the nickname
foreach($post as $index => $post){
    //$index is built in and is the number of the array that you are currently on
    //for each item in the array it will print out the text inside until the array is empty
    echo "</br>".$index +  1 . "-".$post;
    //this adds 1 to the index so that the counter starts at 1 instead of zero
}

$y = 12;

function registeruser($email){
global $y;
// global is how yu echo out something that is outside of the scope of the function
    echo $email." registered";
}

registeruser("</br>matthew.darden1234@gmail.com");

//n1 and n2 are the arguments that are being passed through the function
echo "</br>";

//setting $n1 and $n2 as equal to zero lets you run the function without putting in any arguments and sets the deafult for the variables to zero
function sum($n1 = 0, $n2 = 0){
return $n1 + $n2;
}
 //this assigns the variable number to the function sum with the arguments 5 and 5 for $n1 and $n2

$number = sum(5, 5);
 
echo $number;

$multiply =fn($n1, $n2) => $n1 * $n2;
//this is how you write an arrow function
//multiply is the variable name fn is the function inside the parenthesis is the arguments that you are passing through
// after the arrow is the code that will run apon calling the function



?>