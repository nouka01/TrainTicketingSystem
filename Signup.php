<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>



  

<section class="contact" id="contact">
<br>
    <div class="row">
        <form action="Signup.php" method="post">
        	<center><h1 class="heading"> <span>Sign</span> Up </h1></center>
            <div class="inputBox">
                <input type="text" name = 'username' placeholder="Username">
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name = 'phone' placeholder="Phone">
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name = 'email' placeholder="Email">
            </div>
            <br>
            <div class="inputBox">
                <input type="password" name = 'password' placeholder="Password">
            </div>
            <div class="inputBox">
                <input type="password" name = 'conf-password' placeholder="Confirm Password">
            </div>
            <center><input type="submit" name = 'submit' value="SignUp" class="btn"></center> 
            <center><a href="login.php" class="btn">Login</a></center>
        </form>
    </div>
</section>
</html>

<?php




if(isset($_POST['submit'])){
    include 'C:\xampp\htdocs\TrainTicketingSystem-main\database\dbConnection.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO users (user_name, user_email, user_password, user_phone) 
    VALUES 
    ('$username' , '$email', '$password', '$phone')";

    $sql = mysqli_query($conn,$query);
    if($sql){
        echo "Successful SignUp";
        header("Location: login.php");
    }
    else
        echo "Registration Unsuccessful";

   



}
