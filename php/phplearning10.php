<?php
//this creates a class named user
class User{


public $name;
public $email;
public $password;

// constructor is a method that runs everytime a object is created inside of its class

public function __construct($name,$email,$password){
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    
    
    


}



//this is how you create a method inside of a class
//a method is just a function that is assigned to a class
function set_name($name){
$this->name = $name;
}

function get_name(){
    return $this->name;
}

}


$user1 = new User("Matthew","matthew.darden1234@gmail.com","@Bossman2303");
//this is how you create an object using the user class named user1
//the parameters are defualted to null and u have to crete a constructor to deault them to somethingy

//$user1->name = "matthew";
//the arrow allows you to change a item in an object in this case the variable name 
//inside of the object user1 ius being set to matthew

//$user1->set_name("matthew");
//the same way you can access properties in a object you can access methods 

echo $user1->email;


//employee is the class being created and it extends or inherits the
//atrributes of the class usery
class Employee extends User{
    public function __construct($name,$email,$password,$title){
        
        //this lets you call a function from the parent class
        //int his case the function is the constructor and the parent class is user
parent::__construct($name,$email,$password);

        $this->title = $title;
    }


    public function get_title(){
        return $this->title;
    }

}

$employee1 = new Employee ("matt","matt@gmail.com","bossman","manager");

echo $employee1->get_title();