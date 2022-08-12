<!DOCTYPE html>
<html lang="en">
<?php
 require_once './database/dbConnection.php';
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/admin-panel.css">
  <title>Admin pannel</title>
</head>

<?php session_start();
    include 'navbar.php';?>

<body>
  <div class="sidenav">
    <a href="train-stations.php">Train Stations</a>
    <a href="all-tickets.php">All Tickets</a>
  </div>

  <div class="body2">
    <div class="title">
      <p> <b>Dashboard</b></p>
    </div>

    <div class="three-squares">
      <div class="square1">
        <div class="text1">
          <p>Users Count:-</p>
          <h4 name="numberOfUsers" class="heading4"><span><?php $sql = "SELECT COUNT(*) AS total from users";
$result = $conn->query($sql);
$data =  $result->fetch_assoc();
echo $data['total'];?></span> Users</h4>
        </div>
      </div>
      
      <div class="square3">
        <div class="text3">
          <p>Tickets Booked:-</p>
          <h4 name="totalNumberOfTicketBooked" class="heading4"><span><?php $sql = "SELECT COUNT(*) AS total from tickets";
$result = $conn->query($sql);
$data =  $result->fetch_assoc();
echo $data['total'];?></span> Tickets</h4>
        </div>
      </div>
    </div>

    <div class="users-table">
      <table>

        <caption><b>Users</b></caption>

        <thead>
          <tr>
            <th>User #ID</th>
            <th>First Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Wallet balance</th>
          </tr>
        </thead>
        <?php

$sql='SELECT * FROM users';

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{
?>
  <tbody>
  <tr>
    <td><span name="ID"><?php echo $row['id'] ?></span></td>
    <td><?php echo $row['user_name'] ?></td>
    <td><?php echo $row['user_email'] ?></td>
    <td><?php echo $row['user_phone'] ?></td>
    <td><span name="User-balance">30</span>&dollar;</td>
  </tr>

</tbody>
<?php
}
?>
       
      </table>

    </div>

  </div>

</body>

</html>