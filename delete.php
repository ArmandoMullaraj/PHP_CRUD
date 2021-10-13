<?php
include 'connect.php';
// DELETE
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid']; //first we access the deleteid from URL and storing that in the id variable

    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>