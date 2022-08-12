<?php 
 $connection = new mysqli('localhost','root','','crudop');

 // get method
 if(isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];

    //sqlquery
    $sql="delete from leo where id=$id";

    //again pass con and query

     $result = mysqli_query($connection,$sql);
     if($result) {
        // echo "deleted successfully";
        echo isset($_GET['deleteid']);
        header('location:display.php');
     }  else {
        die(mysqli_error($connection));
  }
 }
?>