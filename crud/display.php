<?php
$connection = new mysqli('localhost','root','','crudop');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Display</title>
  </head>
  <body>
    <div class="container">
  
    <button type="button" class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a>

  </button>
    
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "select * from leo";
    $result = mysqli_query($connection,$sql);
    if ($result) {
        $row=mysqli_fetch_assoc($result);
        // echo $row['name'];

        //while loop auto increment
        while($row=mysqli_fetch_assoc($result))
        {
           $id=$row['id'];
           $name=$row['name'];
           $email=$row['email'];
           $contact=$row['contact'];
           $password=$row['password'];

            echo  '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$contact.'</td>
      <td>'.$password.'</td>

      <td>

      <button type="button" class="btn btn-success"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
      <button type="button" class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>

      </td>
      
    </tr>';
        }
      }

    ?>
 
  </tbody>
</table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>
