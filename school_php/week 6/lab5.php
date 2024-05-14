<?php

class User{

public $name;
public $id;
public $password;

public function __construct($name,$id,$password){
    $this->name = $name;
    $this->id = $id;
    $this->password = $password;
}

function set_name($name){
$this->name = $name;
}

function get_name(){
    return $this->name;
}
function set_id($id){
    $this->id = $id;
    }
    
    function get_id(){
        return $this->id;
    }
    function set_password($password){
        $this->password = $password;
        }
        
        function get_password(){
            return $this->password;
        }
}

$user = new User("Matthew","1122334455","!Password123");





