<?php
    include_once("name_class.php");
    $name = $_POST['name'];  
    $myName = new Name();
    $myName->set_Name($name); 
    $name=$myName->get_Name();
    echo $name; 
?>
