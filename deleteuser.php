<?php
session_start();
if(isset($_SESSION["isAdmin"])!=true){
  
    header("refresh:0.2; url=login.php"); 
    exit();
}

?>



<?php

include_once 'database.php';
$phone_no = $_GET["phone"];
$sql = "DELETE FROM userdata WHERE phone_no=$phone_no";

if (mysqli_query($conn, $sql)) 
 {
   echo "Record deleted successfully";
   header("refresh:0.2; url=userdata2.php"); 

 } 
else 
  {
    echo "Error deleting record: " . mysqli_error($conn);
  }
?>
