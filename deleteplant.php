<?php
session_start();
if(isset($_SESSION["isAdmin"])!=true){
  
    header("refresh:0.2; url=login.php"); 
    exit();
}

?>


<?php

include_once 'database.php';
$id = $_GET["id"];
$sql = "DELETE FROM product WHERE id=$id";

if (mysqli_query($conn, $sql)) 
 {
   echo "Record deleted successfully";
   header("refresh:0.2; url=plantdata2.php"); 

 } 
else 
  {
    echo "Error deleting record: " . mysqli_error($conn);
  }
?>
