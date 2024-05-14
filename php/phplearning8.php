<?php

$file = "users.txt";
if(file_exists($file)){
    //file_exists is a built in function that checks to see if the file exists
    //echo readfile($file)
    //readfile is a built in function that reads the file
    
    //$handle is like a pointer for the fopen
    $handle =fopen($file, "r");
//fopen  opens the file
//$file is the variable attatched to the file
//and r is the mode in this case read

    $contents = fread($handle, filesize($file));
    //fread takes in the handle aswell as the file size
    //filesize gets the size of the file for the selected variable
    
    fclose($handle);
    //fclose closes the file

    echo $contents;
}
//the else runs if the file does not exist
else{
    $handle =fopen($file, "w");
    $contents = "brad" . PHP_EOL . "matthew". PHP_EOL . "christopher". PHP_EOL . "darden";
//php_eol creates a line break same as if you were to press enter

fwrite($handle, $contents);
//fwrite accepts the handle and the contents which is what is going to be written in trhe file

fclose($handle);
}

?>

<?php

if(isset($_POST["submit"])){
$allowed_ext = array("png","jpg","jpeg","gif",);
//these are the only extensions allowed for the file making suure its a picture
}
if (!empty($_FILES["upload"]["name"])){
$file_name = $_FILES["upload"]["name"];
$file_size = $_FILES["upload"]["size"];
$file_temp = $_FILES["upload"]["tmp_name"];
//these change the names of the variables inside of the file

$target_dir="uploads/${file_name}";
//target directory is where the files are going

$file_ext = explode(".", $file_name);
//explode function creates a array from a string
//the first parameter is what you want to seperate the arrays by and the second is the variable

$file_ext = strtolower(end($file_ext));
//strtolower changes the string to all lower cases
//end starts from the end of the string instead of the beginning

if(in_array($file_ext, $allowed_ext)){
//in array is a built in function that checks if a string is in a array
//the first parameter is the string the second is the array


if($file_size <= 1000000){
    move_uploaded_file($file_temp,$target_dir);
    //moveuploadedfile takes in the temperary location and moves it to the target directory
    $message ='<p style="color:green;">File Uploaded</p>';
}
else{'<p style="color:red;">The File is To Large</p>';}
}

}


else{
    $message = '<p style="color:red;">Please Choose a file</p>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo$message ?? null;?>
<!--this will echo message if it exist and if it doesnt then it will echo null
-->

<!--form creates a form
the action is assigning the server to the current site
enctype="multipart/form-data" is required to upload a item
<-->
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">Select image to upload:
    <!--the first input is the choose file button
    the second input is the submit button
<-->    
<input type ="file" name="upload">
    <input type ="submit" value="Submit" name="submit">
    </form>
</body>
</html>

