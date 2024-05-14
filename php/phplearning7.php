<?php

//cookies are information that a website stores about its user and is not used for 
//sensitive information an example would be the users first name

setcookie("name", "matthew", time()+ 86400);
//the first word "name" is the key/ variable
//"Matthew is what is going to be stored inside of the cookie
//and the final value is how long the cookie will last for
//time() is a function that gets the current time and 86400 is seconds until it will expire

//this checks if a cookie with the value or variable name is set and if it is then it runs the code inside
if(isset($_COOKIE["name"])){
    echo$_COOKIE["name"];
    echo "</br>"; 
}

//sessions are a way to store information in variables across multiple pages unlike cookies sessions are stored on the server


//sessions must have session_start before a session can be used
session_start();
if(isset($_POST["submit"])){
   
     $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS );

     
    $password= $_POST["password"];

    if ($username == "john" && $password == "password"){
        $_SESSION["username"] = $username;
        header("Location: /php/dashboard.php");
        //header takes you to the site at the location file

    }

    else{
        echo "Incorrect Login";
    };
     
 }
 
 
 
 echo "</br>"
 ?>
 
 
 
 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
 <div>
 <label for="username">Username: </label>
 
 <input type="text" name="username">
 
 </div>
 
 <div>
 <label for="password">Password: </label>
 <input type="password" name="password" >
 <!---->
 </div>
 
 
 <input type="submit" value="Submit" name="submit">

 </form>

