<?php
session_start();
if(isset($_SESSION["isAdmin"])!=true){
  
    echo "please log in";
    header("refresh:2; url=login.php"); 
    exit();
}
?>


<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM orders");
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Green</title>
    <link rel="stylesheet" href="Design/style.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/5301593776.js" crossorigin="anonymous"></script>
	<style>
		table {
			width: 100%;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #000000;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<body>
<div class="container">
        <!-- navBar start -->
        <section>
            <div class="navBar">
                <div class="icon">
                    <div class="bar">
                        <i class="menuIcon fas fa-bars" style="font-size: 24px;"></i>
                    </div>
                    <h1 style=" color: #008000; margin-bottom: 30px;"> Go Green Nursery  </h1>
                </div>
                <div class="menu">
                    <ul>
                        <li><a class="link" href="adminpanel.php">Home</a></li>
                        <li><?php echo "Username: ". $_SESSION["username"];?></li>
                        
                    </ul>
                </div>
            </div>
            
        </section>
        
	<section>
		<h1>Orders Data</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Product ID</th>
				<th>Price</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php
             $i=0;
             while($row = mysqli_fetch_array($result)) {
             ?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $row["id"];?></td>
				<td><?php echo $row["username"];?></td>
				<td><?php echo $row["product_id"];?></td>
				<td><?php echo $row["price"]." tk";?></td>
			</tr>
            <?php
$i++;
}
?>
</table>
 <?php
 }

else{
    echo "No result found";
}
?>
	</section>
   
</body>

</html>
