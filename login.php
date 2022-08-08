<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	 
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>



<script>
    // this is jQuery to validate sign in form of the local train ticketing system (We're using native Javascript in Sign Up validation (for a change :D))
    $(document).ready(function() {
  $("#login-form").validate({
    rules: {
     
      email: {
        required: true,
        email: true
      }
    },
    messages : {
    
      email: {
        email: "Example for email format: web@dev.com"
      }
    }
  });
});
</script>

<section class="contact" id="contact">
<br>
    <div class="row">
        <form id='login-form' action="" method="post">
        	<center><h1 class="heading"> <span>Log</span> in </h1></center>
            <div class="inputBox">
                <input name = 'email' type="email" placeholder="Email" required>
            </div>
            <br>
            <div class="inputBox">
                <input name = 'password' type="password" placeholder="Password">
            </div>
            <center><input name = 'submit' type="submit" value="Login" class="btn"></center> 
            <center><a href="Signup.php" class="btn">SignUp</a></center>
        </form>
    </div>
    <br>
    <br>
    <br>
</section>
<?php include 'footer.php';?>
</html>



<?php
require 'database/dbConnection.php';
session_start();

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sqlQuery = "SELECT * FROM users WHERE user_email = '".$email."' AND user_password = '".$password."' ";

        $exec = mysqli_query($conn,$sqlQuery);

        $row = mysqli_fetch_array($exec);
        
        
        if($row['user_email'] == $email && $row['user_password'] == $password && $row['user_type'] == ""){

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['user_name'];
            $_SESSION['user_email'] = $row['user_email'];
            $_SESSION['user_phone'] = $row['user_phone'];
            
            echo "Hello, " . $row['user_name'];
            header("Location: index.php");

            
        }
        else if($row['user_email'] == $email && $row['user_password'] == $password && $row['user_type'] == "Admin"){
          $_SESSION['user_id'] = $row['id'];
          $_SESSION['username'] = $row['user_name'];
          $_SESSION['user_email'] = $row['user_email'];
          $_SESSION['user_phone'] = $row['user_phone'];
          
          echo "Hello Admin, " . $row['user_name'];
          header("Location: admin-panel.php");
        }
        else{
            echo "Login unsuccessful, please enter valid credentials";
        }
    }

?>