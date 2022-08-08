<!DOCTYPE html>
<html lang="en">

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
          <h4 name="numberOfUsers" class="heading4"><span>10</span> User</h4>
        </div>
      </div>
      <div class="square2">
        <div class="text2">
          <p>Total Income:-</p>
          <h4 name="totalNumberOfProfit" class="heading4"><span>10,000</span>&dollar;</h4>
        </div>
      </div>
      <div class="square3">
        <div class="text3">
          <p>Tickets Booked:-</p>
          <h4 name="totalNumberOfTicketBooked" class="heading4"><span>500</span> Ticket</h4>
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
            <th>Second Name</th>
            <th>Email</th>
            <th>Wallet balance</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span name="ID">#1</span></td>
            <td>Dummy FN</td>
            <td>Dummy SN</td>
            <td>Dummy@Dummy.com</td>
            <td><span name="User-balance">30</span>&dollar;</td>
          </tr>
          <tr class="grey-tr">
            <td><span name="ID">#2</span></td>
            <td>Dummy FN</td>
            <td>Dummy SN</td>
            <td>Dummy@Dummy.com</td>
            <td><span name="User-balance">30</span>&dollar;</td>
          </tr>
          <tr>
            <td><span name="ID">#3</span></td>
            <td>Dummy FN</td>
            <td>Dummy SN</td>
            <td>Dummy@Dummy.com</td>
            <td><span name="User-balance">30</span>&dollar;</td>
          </tr>
          <tr class="grey-tr">
            <td><span name="ID">#4</span></td>
            <td>Dummy FN</td>
            <td>Dummy SN</td>
            <td>Dummy@Dummy.com</td>
            <td><span name="User-balance">30</span>&dollar;</td>
          </tr>
          <tr>
            <td><span name="ID">#5</span></td>
            <td>Dummy FN</td>
            <td>Dummy SN</td>
            <td>Dummy@Dummy.com</td>
            <td><span name="User-balance">30</span>&dollar;</td>
          </tr>
          <tr class="grey-tr">
            <td><span name="ID">#6</span></td>
            <td>Dummy FN</td>
            <td>Dummy SN</td>
            <td>Dummy@Dummy.com</td>
            <td><span name="User-balance">30</span>&dollar;</td>
          </tr>
          <tr>
            <td><span name="ID">#7</span></td>
            <td>Dummy FN</td>
            <td>Dummy SN</td>
            <td>Dummy@Dummy.com</td>
            <td><span name="User-balance">30</span>&dollar;</td>
          </tr>
          <tr class="grey-tr">
            <td><span name="ID">#8</span></td>
            <td>Dummy FN</td>
            <td>Dummy SN</td>
            <td>Dummy@Dummy.com</td>
            <td><span name="User-balance">30</span>&dollar;</td>
          </tr>
          <tr>
            <td><span name="ID">#9</span></td>
            <td>Dummy FN</td>
            <td>Dummy SN</td>
            <td>Dummy@Dummy.com</td>
            <td><span name="User-balance">30</span>&dollar;</td>
          </tr>
          <tr class="grey-tr">
            <td><span name="ID">#10</span></td>
            <td>Dummy FN</td>
            <td>Dummy SN</td>
            <td>Dummy@Dummy.com</td>
            <td><span name="User-balance">30</span>&dollar;</td>
          </tr>
        </tbody>
      </table>

    </div>

  </div>

</body>

</html>