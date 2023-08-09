<?php
$invalid=0;
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `registration` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['username'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $password=$_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    $sql="update `registration` set id=$id,username='$name' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Updated successfully";
        header('location:display.php');
    }else{
        // die(mysqli_error($con));
        $invalid=1;
    }
}

?>

<?php

if($invalid){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error </strong> Password cannot be changed.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
?>

<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">

  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="username" autocomplete="off" value=<?php echo $name;?>>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" disabled class="form-control" placeholder="Enter your password" name="password" value=<?php echo $password;?>>
  </div>
  

 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

    

  </body>
</html>

