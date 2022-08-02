


<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Training Studio</title>
  <link rel="stylesheet" href="css/navbar.css" />

  

</head>
     <!-- Start Nav -->
  <nav>
    <div class="logo">
      <a href="index.php"><span></span></a>
    </div>
    <i class="fas fa-ellipsis-v" id="menuButton"></i>
    <ul id="menu">

    <?php // Check if user is NOT logged in, then show the navigation bar that contains the login and signup hyperlinks
      if (!isset($_SESSION['user_id'])):
    ?>
      <li> <a href="index.php">Home</li></a>
      <li><a href="book-a-ticket.php">Ticket</a><li>
      <li><a href="cu.php">Contact us</a></li>
      <li><a href="Signup.php">Signup</a>
      <li><a href="login.php">Login</a>
      <?php endif;?>
    
 
      <?php //Check if user IS logged in, then show the nav bar that contains logout and doesn't contain signup
      if (isset($_SESSION['user_id'])):
    ?>
      <li> <a href="index.php">Home</li></a>
      <li><a href="book-a-ticket.php">Ticket</a><li>
      <li><a href="cu.php">Contact us</a></li>
      <li> <a href="logout.php">Logout</li></a>
      <?php endif;?>



    </ul>
  </nav>
  <!-- End Nav -->
</html>