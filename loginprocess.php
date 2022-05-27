<?php
include_once 'database.php';

if(isset($_POST["submit"]))
{
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
        echo $username_err;
        header ("refresh:2; url=login.php");
        exit();

        
    } else{
        $username = trim($_POST["username"]);
    }

    if(empty(trim($_POST["pass"]))){
        $password_err = "Please enter your password.";
        echo $password_err;
        header ("refresh:2; url=login.php");
        exit();
    } else{
        $password = trim($_POST["pass"]);
    }
    
    $encryption = openssl_encrypt($password, "AES-128-CTR", "Arafat", 0,'1234567891011121');
    $sql1="SELECT * FROM userdata WHERE username = '$username' and upassword = '$encryption'";
    $result = mysqli_query($conn,$sql1);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $count =  mysqli_num_rows($result);

    if ($count == 1) 
       {
        $usertype = $row["user_type"];
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["name"] = $row["name"];
        $_SESSION["phone"] = $row["phone_no"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["usertype"] = $usertype;
        if ($usertype == 'a')
       {
        $_SESSION["isAdmin"] = true;
   
        ?>
        <script>
        alert("Logged in successfully");
     </script>
    <?php
     header("refresh:0.3;url=adminpanel.php");
       }
       else
       {
        $_SESSION["isCustomer"] = true;
        ?>
        <script>
        alert("Logged in successfully");
     </script>
    <?php
        header ("refresh:0.3;url=userindex.php");
        
       }
        
       }
    else
       {
         echo"Invalid username or password";
         header ("refresh:0.2; url=login.php");
         exit(); 
       }


}

?>