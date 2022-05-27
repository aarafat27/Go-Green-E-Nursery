 
<?php
include ("regprocess.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script
   src="Validation/registration.js" type="text/javascript ">

  </script>
   <link rel="stylesheet" href="Design/registration.css">
</head>
<body class="body-background">

<div class="bbbb">

<div class="form-design">
   
<form action="regprocess.php" method="POST" enctype="multipart/form-data" onsubmit="validateform()"> 
   
 <h1 id="tag">Go Green Nursery</h1>				                    
 <h2>Registration</h2>				                    

	<label>Name:</label>  <br>	
   <input type="text" name="name" id="name"placeholder="Arafat" onkeyup="checkName()" onblur="checkName()"> <br>              
   <span class="error" id="nameErr" > <?php echo $_SESSION['nameEr'];?></span><br>			

   <label>Email:</label>  <br>	
   <input type="text" name="email" id="email" placeholder="ex@email.com" onkeyup="checkEmail()" onblur="checkEmail()"><br>	
   <span class="error" id="emailErr"> <?php echo $_SESSION['emailErr'];?></span><br>	

	<label>Phone No:</label>  <br>	
   <input type="text" name="phone" id="phone"placeholder="01384764" onkeyup="checkContactno()" onblur="checkContactno()"><br>
   <span class="error" id="contactnoErr"> <?php echo $_SESSION['contactnoErr'];?></span><br>

	<label>Username:</label>  <br>	
   <input type="text" name="username" id="username"placeholder="arafat" onkeyup="checkUserName()" onblur="checkUserName()"> <br>
   <span class="error" id="usernameErr"> <?php echo $_SESSION['usernameErr'];?></span><br>	

	<label>Password:</label>  <br>	
   <input type="password" name="password" id="password"placeholder="1234"  onkeyup="checkPass()" onblur="checkPass()" > <br>
   <span class="error" id="passErr"> <?php echo $_SESSION['passwordEr'];?></span><br>	

	<label>Confirm Password:</label>  <br>	
   <input type="password" name="confirmpassword"  id="confirmpassword"placeholder="1234"  onkeyup="checkConfirmpassword()" onblur="checkConfirmpassword()"> <br>
   <span class="error" id="confirmpasswordErr"> <?php echo $_SESSION['cpasswordErr'];?></span><br>     				 
			  
	<input type="submit" name="submit" value="Register" class="register-button" /> 
   			  
	
</form>  
</div>


    </div>
 
</body>
</html>
