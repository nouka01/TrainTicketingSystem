<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train tickets</title>
    <link rel="stylesheet" href="CSS/train-ticket-stylesheet.css">
</head>
<?php 
session_start();
    include 'navbar.php';
    ?>
    
<body>

    <div class="main-header">
    <h1>User Tickets</h1>
    </div>
    <div class="header1">
        <h1>TRAIN TICKET</h1>
    </div>
    <div class="whole-ticket">
        <div class="left-ticket-part">
            <div class="passenger-name">
                <label for="name">NAME OF PASSENGER:</label>
    
                <input type="text" id="name" value="Dummy name" name="name" maxlength="20" minlength="2" disabled>
            </div>


            <div class="train-date">
                <label for="date">DATE:</label>
    
                <input type="date" id="date" name="date" maxlength="20" minlength="2" disabled>
            </div>
        </div>

        <div class="right-ticket-part">

            <!-- <div class="train-name">
                <label for="t-name">TRAIN:</label>
    
                <input type="text" id="train-name" name="train-name" maxlength="20" minlength="2" value="Dummy train" disabled>
            </div> -->

            <!-- <div class="platform-number">
                <label for="platfrom">PLATFROM:</label>
    
                <input type="text" id="platfrom" name="platfrom" maxlength="20" minlength="2" value="Dummy platfrom" disabled>
            </div> -->

            <!-- <div class="carriage-number">
                <label for="carriage">CARRIAGE &numero;:</label>
    
                <input type="number" id="carriage" name="carriage-number" maxlength="20" minlength="2" value="101213" disabled>
            </div> -->
            <div class="from">
                <label for="from">FROM:</label>
    
                <input type="text" id="from" value="Dummy Source station" name="from" maxlength="20" minlength="2" disabled>
            </div>

            <div class="to">
                <label for="to">TO:</label>
    
                <input type="text" id="to" value="Dummy destination station" name="to" maxlength="20" minlength="2" disabled>
            </div>

            <!-- <div class="filler-div">
    
                <input type="text" disabled>
            </div> -->

        </div>

        <div class="middle-ticket-part">
            <div class="depart-time">
                <label for="depart">DEPART TIME:</label>
    
                <input type="time" id="depart" name="depart" maxlength="20" minlength="2" disabled>
            </div>

            <div class="class-degree">
                <label for="class">CLASS:</label>
    
                <input type="text" id="class" value="x-Class" name="class" maxlength="20" minlength="2" disabled>
            </div>
        </div>
    </div>
    <div class="footer"></div>

</body>

</html>