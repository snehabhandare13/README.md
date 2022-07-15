<?php
session_start(); // start the seesion
echo "log out";
if(isset($_SESSION['sneha'])) {
    unset($_SESSION['name']); 
}

if(isset($_SESSION['18'])) {
    unset($_SESSION['age']); 
}   

echo "\n <br> session destroyed successfully ";
session_destroy();   
?>
