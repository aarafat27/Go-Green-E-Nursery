<?php
if(session_status()>=0){
    session_start();
    if(isset($_SESSION["usertype"])){
        if($_SESSION["usertype"]=='a')
        {
            header("refresh:0.2; url=adminpanel.php");
            exit();
        }
        
        else{
            header("refresh:0.2; url=customerpanel.php");
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="Design/login.css">
<head>
   
    <title>login page</title>
</head>
<body>
<section  class="cxv" >
     
     <div class="login-body">
        <div class="right-half">
            <form action="loginprocess.php" method="POST">
                <!-- <img id="logo" src="../Resources/images/7.jpg" alt=""><br> -->
            <input class="inp" type="text" name="username" id="" placeholder="username"><br>
            <input class="inp" type="password" name="pass" id="" placeholder="password"><br>
            
            <input id="sign-in-button" name="submit"  type="submit" value="login">

      
            <p class="sign-up-link">Don't Have an account..? <a href="registration.php" class="Sign-Up">Sign Up</a> here</p>
        </form>
        </div>
     </div>
    
</section>
</body>
</html>