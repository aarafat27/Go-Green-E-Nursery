<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM product");
?>
<!DOCTYPE html>
<html>
 <head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Green</title>
    <link rel="stylesheet" href="Design/style.css">
    <link rel="stylesheet" href="Design/design.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/5301593776.js" crossorigin="anonymous"></script>

 </head>
<body>
<div class="container">
        <!-- navBar start -->
        <section>
           
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="Go-Green  " href="#">Go Green Nursery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
      <span class="navbar-text">
      <a class="link-nvbar" href="#">Home</a>
      <a class="link-nvbar" href="registration.php">Sign up</a>
      <a class="link-nvbar" href="login.php">Login</a>
      </span>
    
    </div>
  </div>
</nav>
        </section>
        <!-- navBar end -->


<!-- Popular collection start-->

<section class="popular-collection">
<h2 style="text-align: center; color: #261C2C; margin-bottom: 30px;">Popular Collection</h2>


<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class="container">
  <div class="row justify-content-center">
<?php
$i=0;
while($row = mysqli_fetch_array($result)){
?>

<!-- // -->


    <div class="col-md-4" style="margin-bottom:20px">
   <div class=" data-grid" >
   <div class="data-grid-img">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" alt="">
          </div>

          <h4><?php echo "Name: "; ?>
          <?php echo $row["name"]; ?></h4>
          <h4><?php echo "ID: "; ?>
          <?php echo $row["id"]; ?></h4>
          <h5 id="price"><?php echo "Price :"; ?>
          <?php echo$row["price"];
          echo" tk" ?>

           </h5>
          
          <p>Available</p>
          <button class="buy-button"><a style=" text-decoration: none ;  color: white" href="payment.php"> Buy</a>  </button>
   </div>
    </div>
    
 

 
<?php


}

?>
</div>
<button id="seemore-button">See More</button>
</div>

</section>


<?php
}
else{
    echo "No result found";
}
?>

<section>
            <h1 align="center " style="font-size: 36px; margin: 40px 0">Contact us</h1>
            <div class="contact">
                <div class="address">
                    <div class="box">
                        <h2><i class="fas fa-map-marker-alt"></i> Address</h2>
                        <p>Kuratoli <br> Kuril, Aiub</p>
                    </div>
                    <div class="box">
                        <h2><i class="fas fa-phone"></i> Phone</h2>
                        <p>+889683764389 <br> +884576965234</p>
                    </div>
                    <div class="box">
                        <h2> <i class="fas fa-envelope-square"></i> Email</h2>
                        <p>gogreen@gmail.com <br> green@yahoo.com</p>
                    </div>
                </div>
                <div class="message">
                    <div>
                        <input type="text" placeholder="Your Name"> <br>
                        <input type="text" placeholder="Your Phone"> <br>
                        <input type="text" placeholder="Your Message"> <br>
                        <button>Send</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->
</div>
<footer>
  <h2>Go Green Nursery</h2>
  <h4>Copyright © 2022 go green nursury</h4>
  <p>All rights reserved</p>
  <span>
    <i class="fab fa-instagram"></i>
    <i class="fab fa-dribbble"></i>
    <i class="fab fa-twitter"></i>
    <i class="fab fa-youtube"></i>
  </span>
</footer>

 </body>
</html>


