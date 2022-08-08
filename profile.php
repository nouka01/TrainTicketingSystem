<?php require_once 'database/dbConnection.php'; ?>
<?php session_start();
          ?>
<?php

if (isset($_POST['save'])) {

    $newUsername = $_POST['profileusername'];
    $newEmail = $_POST['profileemail'];
    $newPhone = $_POST['profilephone'];
    $currentUserID = $_SESSION['user_id'];

    $sql = "UPDATE `users` SET `user_name` = '$newUsername', `user_email` = '$newEmail', `user_phone` = '$newPhone' WHERE `id` = '$currentUserID'";

    $result = $conn->query($sql);

    if ($result) {
        $_SESSION['username'] = $newUsername;
        $_SESSION['user_email'] = $newEmail;
        $_SESSION['user_phone'] = $newPhone;
        echo "<script>alert('Updated Successfully!');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <center><h1>My Profile</h1></center>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="main-body">
    
          
        
    
<div class="row gutters-sm">
<div class="col-md-4 mb-3">
<div class="card">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
<div class="mt-3">
<h4>John Doe</h4>
<p class="text-secondary mb-1">Full Stack Developer</p>
<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
<button class="btn btn-primary">Upload photo</button>
<br>
<br>
       
<button class="btn btn-outline-primary">Remove photo</button>
</div>
</div>
</div>
</div>
<div class="card mt-3">
          
              
                  
</div>
</div>
<div class="col-md-8">
<div class="card mb-3">
<div class="card-body">
<div class="row">
<div class="col-sm-3">
<h6>Username</h6>
</div>
<div class="col-sm-9 text-secondary">
    <form action = "" method = 'POST'>
        <?php 
        $currentUserName = $_SESSION['username'];?>
<input type="text" id="fname" name="profileusername" value = "<?php echo $currentUserName;?>"><br>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 >Email</h6>
</div>
<div class="col-sm-9 text-secondary"> 
<?php 
        $currentUserEmail = $_SESSION['user_email'];?>    
<input type="email" id="mail" name="profileemail" value = "<?php echo $currentUserEmail;?>"><br>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 >Phone</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php 
        $currentUserPhone = $_SESSION['user_phone'];?>  
<input type="text" id="pho" name="profilephone" value = "<?php echo $currentUserPhone;?>"><br>
    
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">



   

</div>
</div>


 
<center><input type = 'submit' name = 'save' value = 'Save changes' class="btn btn-info " target="__blank" href=""></input></center><br>
</form>
<form action = 'deleteAccount.php' method = 'POST'>
    <center><input type = 'submit' value = 'Delete Account!' class="btn btn-danger "></center>
</form>
                    
                
     
<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: center;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
</style>
<script type="text/javascript">
</script>
</body>
</html>