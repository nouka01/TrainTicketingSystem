<?php session_start();
        require_once 'database/dbConnection.php';
?>


<form action = "" method = 'POST'>
<center>
<br><br><br><br><br>
user ID you want to add credits to <input type = 'number' name = 'userID' required><Br><br>
Amount of Credits <input type = 'number' name = 'credit-amount' required><br><br>
        <input type = 'submit' name = 'submit-credit' value = 'Add Credits!'>
</center>
</form>


<?php



if(isset($_POST['submit-credit'])){
    $userID = $_POST['userID'];
    $creditAmount = $_POST['credit-amount'];

    $sqlGetUserBalance = "SELECT * FROM users WHERE id = '$userID' ";
    $result1 = mysqli_query($conn,$sqlGetUserBalance);

    if($result1){
    $row1 = mysqli_fetch_array($result1);
    }

    $newBalance = $creditAmount + $row1['user_balance'];


    $sqlAddCredits = "UPDATE users SET user_balance = '$newBalance' WHERE id = '$userID' ";
    $result2 = mysqli_query($conn, $sqlAddCredits);

    if($result2){
        echo "<script>alert('Credits Added Successfully!');</script>";
        echo "<script>window.location.href = 'admin-panel.php';</script>";
    }

}

?>