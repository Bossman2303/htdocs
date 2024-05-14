<?php


function inverse($x){
    if($x == 0){
throw new Exception("division by zero error");
//throw new exception creates an exception on what should happen if the error occures
    }
    
    return 1/$x;
}


//try first tries the code and if an exception/error appears then it will 
//run what is inside of catch
try{
echo inverse(0);
}catch(Exception $e){
echo "Caught Exception: ", $e->getMessage(),"";
}finally{
    echo "first finally";
    //finally runs at the end of the errors

}