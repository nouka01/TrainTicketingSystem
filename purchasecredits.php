<?php
session_start();
require_once 'database/dbConnection.php';

$userLoggedID = $_SESSION['user_id'];

?>
<center>
<form action = "" method = 'POST'>
<br><br><br><br><br>
    Name on card <input required type = 'text' placeholder = 'ex: Johnny Richard'><br><br>
    Credit Card Number <input required type = 'text' placeholder = 'ex: 1111 2222 3333 4444'><br><br>
    Expiry Date <input required type = 'text' placeholder = 'ex: 26/06'><br><br>
    CVV <input required type = 'text' placeholder = 'ex: 111'><br><br>
    Amount Of Credits <input required type = 'number' name = 'amount' placeholder = 'ex: 10'><br><br>
    <input type = 'submit' name = 'recharge-submit' value = 'Recharge'>

</form>
</center>

<?php

if(isset($_POST['recharge-submit'])){

    $balanceAmount = $_POST['amount'];
    //To get current balance
    $getCurrentBalanceSQL = "SELECT * FROM users WHERE id = '$userLoggedID' ";
    $result = mysqli_query($conn,$getCurrentBalanceSQL);
    $row = mysqli_fetch_array($result);
    // Add existing balance to new recharged balance
    $newBalance = $balanceAmount + $row['user_balance'];

    //Insert new balance into database
    $insertNewBalanceSQL = "UPDATE users SET user_balance = '$newBalance'  WHERE id = '$userLoggedID' ";
    $result2 = mysqli_query($conn, $insertNewBalanceSQL);
    
    if($result2){
        echo "<script>alert('Balance recharged successfully!');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }



}

?>
