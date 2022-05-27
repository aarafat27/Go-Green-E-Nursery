
<?php
session_start();


$error="";
$Email="";
$Name="";
$Phone_no="";
$UserName="";
$Pass=""; 
$ConfirmPass="";
error_reporting(0);

if(isset($_POST["submit"]))
{

    $Email= $_POST["email"];
    
    $Name= $_POST["name"];
 
    $Phone_no= $_POST["phone"];
    $UserName=$_POST["username"];
 
    $Pass= $_POST["password"];
   
    $ConfirmPass=$_POST["confirmpassword"];
    

if(empty($Email)||empty($Name)||empty($Phone_no)||empty($UserName))
{
    $error=1;
}
if($Pass!=$ConfirmPass)
{
    echo "Password should be same";
    $error=1;
}
 
else{
    
    include_once 'database.php';
    $encryption = openssl_encrypt($Pass, "AES-128-CTR", "Arafat", 0,'1234567891011121');
    
    $sql = "INSERT INTO userdata (name, username, email, phone_no, upassword )
    VALUES ('$Name', '$UserName', '$Email',  '$Phone_no' , '$encryption')";
    if (mysqli_query($conn, $sql)) {
        ?>
    <script>
    alert("Registration succesfull");
 </script>
<?php
     
     header("refresh:0.3;url=login.php");
    
   } 
   else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
 
}

if($error == 0){
   
    $_SESSION["Email"] = $_POST["Email"];
    $_SESSION["Name"] = $_POST["Name"];
  
    $_SESSION["Phone_no"] = $_POST["Phone"];
   
    $_SESSION["UserName"] = $_POST["UserName"];
   
    $_SESSION["Pass"] = $_POST["Pass"];
    $_SESSION["ConfirmPass"] = $_POST["ConfirmPass"];


}
else{
    $error = 1;
}
}


?>