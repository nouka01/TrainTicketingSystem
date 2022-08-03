<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train book ticket</title>
    <link rel="stylesheet" href="train-ticket-stylesheet.css">
</head>

<body>

    <div class="header">
        <h1>TRAIN TICKET</h1>
    </div>
    <div class="whole-ticket">
        <div class="left-ticket-part">
            <div class="passenger-name">
                <label for="name">NAME OF PASSENGER:</label>
                <br>
                <input type="text" id="name" value="Dummy name" name="name" maxlength="20" minlength="2">
            </div>
            <br>
            <div class="from">
                <label for="from">FROM:</label>
                <br>
                <input type="text" id="from" value="Dummy Source station" name="from" maxlength="20" minlength="2">
            </div>
            <br>
            <div class="to">
                <label for="to">TO:</label>
                <br>
                <input type="text" id="to" value="Dummy destination station" name="to" maxlength="20" minlength="2">
            </div>
            <br>
            <div class="train-date">
                <label for="date">DATE:</label>
                <br>
                <input type="date" id="date" name="date" maxlength="20" minlength="2">
            </div>
        </div>
        <br>

        <div class="right-ticket-part">
            <div class="train-name">
                <label for="t-name">TRAIN:</label>
                <br>
                <input type="text" id="train-name" name="train-name" maxlength="20" minlength="2" value="Dummy train">
            </div>
            <br>
            <div class="platform-number">
                <label for="platfrom">PLATFROM:</label>
                <br>
                <input type="text" id="platfrom" name="platfrom" maxlength="20" minlength="2" value="Dummy platfrom">
            </div>
            <br>
            <div class="carriage-number">
                <label for="carriage">CARRIAGE &numero;:</label>
                <br>
                <input type="number" id="carriage" name="carriage-number" maxlength="20" minlength="2" value="101213">
            </div>
        </div>
        <br>

        <div class="middle-ticket-part">
            <div class="depart-time">
                <label for="depart">DEPART TIME:</label>
                <br>
                <input type="time" id="depart" name="depart" maxlength="20" minlength="2">
            </div>

            <div class="class-degree">
                <label for="class">CLASS:</label>
                <br>
                <input type="text" id="class" value="x-Class" name="class" maxlength="20" minlength="2">
            </div>
        </div>
    </div>
    <div class="footer"></div>

</body>

</html>