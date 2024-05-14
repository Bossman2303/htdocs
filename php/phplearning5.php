<?php


//isset is a built in function that is used to check if a variable has been set or not
//this is mainly used to see if a submit button has been pressed yet
//this if statmentchecks if the submit button is set and if it is then
//it echos out the information from the variables age and name1
if(isset($_POST["submit"])){
    echo $_POST["age"];

    //$_POST contains information about variables passed threough a form
    echo $_POST["name1"];
    //$_GET["name1"] is how you get information that is stored in the link itself
    //name1 is the variable name 
}



echo "</br>"
?>

<!--The query strings arent added to the website until the a tag has been clicked-->
<a href="<?php echo $_SERVER['PHP_SELF'];
//php_shelf is the webiste file and would be the same as if you put in the url of the website that is on file

?>?name1=Brad&age=30">Click</a>
<!--?name1=Brad is a query string
?name1 is the variable and brad is the string that is attatched to it-->


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div>
<label for="name1">Name: </label>
<!--label tag adds box where you can input information like a login for username and passwords-->
<input type="text" name="name1">
<!--input tags change things in relation to the label tag
the name is linked to which label tag is being changed
the type is what information is being accepted in this setting it will be text-->
</div>

<div>
<label for="age">Age: </label>
<input type="text" name="age" >
<!---->
</div>

<!--Once the information is submited it will be added to the query strings name1 and age 
and will be used using the post superglobal-->
<input type="submit" value="Submit" name="submit">
<!--the value inside of a input tag is what will be inside of the box when it is made
the submit type for input is related to a submit button which would be used for logins and other things-->
</form>