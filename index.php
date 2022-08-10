<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'navbar.php';?>
  
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Training Studio</title>
  <link rel="stylesheet" href="css/index.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
</head>

<body>

 
  </header>
  <!-- Start Header -->
  <div class="header">
    <video autoplay muted loop>
      <source src="images/production ID_4550475.mp4" />
    </video>
    <div class="text-box">
    <p> <?php $helloMsg = "Hello" ;
    
    if(isset($_SESSION['user_id'])){
      $helloMsg = $helloMsg . ",". $_SESSION['username'];
    }
    echo $helloMsg;
    
    ?> </p>
      
      
      <h1>EASY WITH OUR <span>Train Station</span></h1>
      <a href="Signup.php">BECOME A MEMBER</a>
    </div>
  </div>
  <!-- End Header -->


  <!-- Start Classes -->
  <div class="classes">
    <div class="container">
      <div class="special-heading">
        <h2>OUR <span>CLASSES</span></h2>
        <img src="images/line-dec.png" alt="" />
        <p>
          Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed
          viverra<br />
          ipsum dolor, ultricies fermentum massa consequat eu.
        </p>
      </div>
      <div class="content">
        <div class="classes-sec">
          <div class="class activ">
            <i class="fa fa-train" style="font-size:48px;color:rgb(60, 28, 238)"></i>

            <h3>First Training Class</h3>
          </div>
          <div class="class">
            <i class="fa fa-train" style="font-size:48px;color:rgb(60, 28, 238)"></i>

            <h3>Second Training Class</h3>
          </div>
          <div class="class">
            <i class="fa fa-train" style="font-size:48px;color:rgb(60, 28, 238)"></i>

            <h3>Third Training Class</h3>
          </div>
          <div class="class">
            <i class="fa fa-train" style="font-size:48px;color:rgb(60, 28, 238)"></i>

            <h3>Fourth Training Class</h3>
          </div>
          <a href="book-a-ticket.html">View All Schedules</a>
        </div>
        <div class="desc-sec">
          <img src="images/bullet.jpeg" alt="" />
          <h3>First Training Class</h3>
          <p>
            Phasellus convallis mauris sed elementum vulputate. Donec posuere
            leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed
            vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia
            gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut,
            accumsan diam.
          </p>
          <a href="book-a-ticket.php">VIEW SCHEDULE</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Classes -->
 
  <!-- Start Contact -->
  <div class="contact">
    <div class="container">
      <div class="text">
        <h4><span>Feel free to contact us</span></h4>
        <a href="cu.php">Contact us</a>
      </div>
    </div>
  </div>
  <!-- End Contact -->
  <!-- Start Footer -->
  <?php include 'footer.php';?>
</body>

</html>