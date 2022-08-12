<?php
$connection = new mysqli('localhost','root','','crudop');

if (!$connection){

 die(mysqli_error($connection));
}
   

?>