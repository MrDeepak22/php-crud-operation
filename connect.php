<?php 
$connection = new mysqli("localhost","root","","php_crud");
 if(!$connection){
    die(mysqli_error($connection));
 }

?>