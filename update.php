<?php
include 'connect.php';
// UPDATE
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result); //using this method we can access the data from DB
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="UPDATE `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id"; //single quotes on varchar
    $result=mysqli_query($con,$sql); //to excecute the query
    if($result){
        // echo "Updated successfully";
        header('location:display.php'); 
    }else {
        die(mysqli_error($con));
    }
}

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" value=<?php echo $name; ?> autocomplete="off">
        </div>
        <div class="mb-3">
            <label  class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email" value=<?php echo $email; ?> autocomplete="off">
        </div>
        <div class="mb-3">
            <label  class="form-label">Mobile</label>
            <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" value=<?php echo $mobile; ?> autocomplete="off">
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password" value=<?php echo $password; ?> autocomplete="off">
        </div>
        
         
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
    </div>


  </body>
</html>