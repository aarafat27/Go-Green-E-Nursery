
<?php
session_start();
if(isset($_SESSION["isCustomer"])!=true){
  
    echo "please log in";
    header("refresh:2; url=login.php"); 
    exit();
}
?>

<html lang="en">
<head>
    <link rel="stylesheet" href="Design/payment.css">
</head>
<body>

<div class="container">

    <form action="paymentprocess.php" method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>
               
                <div class="inputBox">
                    <span>product id :</span>
                    <input type="int" name = "id" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="City" required>
                </div>
                <div class="flex">
                </div>
            </div>
            <div class="col">

                <h3 class="title">payment</h3>

              
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Mr./Mrs ....." required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january" required>
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234" required>
                    </div>
                   
                </div>
            </div>
        </div>

        <input type="submit" class="buttons" id="aaaa" name="submit" >
    </form>

</div>    
<a href="userindex.php">back</a>
</body>
</html>