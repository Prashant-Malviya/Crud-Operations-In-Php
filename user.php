<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "insert into `crud_operations` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $result = mysqli_query($con,$sql);
    if($result)
        // echo "Data inserted successfully";
        header('location:display.php');
    else die(mysqli_error($con));
}


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crude Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


    <div class="container my-5">

    <form method = 'post'>
  <div class="form-group mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name = "name">
  </div>
  <div class="form-group mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name = "email">
  </div>
  <div class="form-group mb-3">
    <label class="form-label">Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name = "mobile">
  </div>
  <div class="form-group mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name = "password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>