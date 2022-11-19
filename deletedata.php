<?php 
include "connect.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $deletedata = "delete from `crud` where id=$id";
    $result = mysqli_query($connection, $deletedata);
    if($result){
        header('location:displayuser.php');
    }
    else{
        die(mysqli_error($connection));
    }
}
?>