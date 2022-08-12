<?php 
$connection = new mysqli('localhost','root','','crudop');

$id=$_GET['updateid'];
$sql="select * from `leo` where id=$id";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$contact=$row['contact'];
$password=$row['password'];


if (isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $password=$_POST['password'];

  //insert query
  $sql ="update `leo` set id=$id,name='$name',email='$email',contact='$contact',password='$password' where id=$id";

  //excute query
  $result=mysqli_query($connection,$sql);

  if($result) {
    header('location:display.php');
    // echo "data updated";
  } 
  else {
    die(mysqli_error($connection));
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>crud operation</title>
  </head>
  <body>
  <div class="container my-5">
    <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" value=<?php echo $name;?>>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value=<?php echo $email;?>>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">contact</label>
    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mobile No" value=<?php echo $contact;?>>
</div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Password" value=<?php echo $password;?>>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
