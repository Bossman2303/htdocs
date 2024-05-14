<?php
if(isset($_POST["submit"])){
   //filter input lets you filter out certain responses that you might not want and this is mainly for security
//Input_post is the type of input that is being filtered and in this case it is the post global variable
//"name1" is the variable in the form that has the information
//FILTER_SANITIZE_SPECIAL_CHARS works similarly to htmlspecialchars
//being that it only lets you pass in html and not javascript
    $name = filter_input(INPUT_POST, "name1", FILTER_SANITIZE_SPECIAL_CHARS );
echo $name;
    
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS );
echo $age;
    
}



echo "</br>"
?>



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
