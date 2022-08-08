<?php  require 'database/dbConnection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/book-ticket-stylesheet.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<?php session_start();
    include 'navbar.php';?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body>
    <div class="heading">
        <h1><b>Book your ticket here!</b></h1>
    </div>

    <form action = "" method="post">
        <div class="user-input">

            <div class="User-name">
                <div class="fn">
                    <label for="fn">First Name</label>
                    <br>
                    <input type="text" name="firstName" id="fn"  disabled autofocus placeholder="Enter your First name "
                        maxlength="20">
                </div>

                <div class="ln">
                    <label for="ln">Last Name</label>
                    <br>
                    <input type="text" name="lastName" id="ln"  disabled placeholder="Enter your Last name"
                        maxlength="20">
                </div>

            </div>

            <div class="Email-and-phoneNumber">
                <div class="email">
                    <label for="mail">Email</label>
                    <br>
                    <input type="email" name="email" id="mail" disabled  placeholder="Enter your E-mail" maxlength="40">
                </div>

                <div class="number">
                    <label for="pn"> Phone Number</label>
                    <br>
                    <input type="number" name="pn" id="pn" disabled  placeholder="Enter your number" maxlength="15">
                </div>

            </div>

            <div class="city-and-address">
                <div class="city">
                    <label for="city">City</label>
                    <br>
                    <input type="text" name="city" id="city" disabled placeholder="ex: Nasr-city" maxlength="20">
                </div>

                <div class="address">
                    <label for="address"> Address</label>
                    <br>
                    <input type="text" name="address" id="address" disabled placeholder="Enter your addres"
                        maxlength="100">
                </div>
            </div>


            <hr>


            <div class="radio-buuton-header">
                <p class="p2"><b>Trip Details</b></p>
            </div>

            <!-- If ther's time handle the select statment Deleting 
                an option when it's choosed in the other select in the backend -->
                
            <div class="sourceStation-and-destinationStaion">

                <div class="source">
                    <label for="source">Source Station</label>
                    <br>
                    <select name="sourceStation" id="source" required>
                    
                        <optgroup label="Source Stations">
                        <?php   $sourceStationsSQL = "SELECT source FROM stations";
                        $result = $conn->query($sourceStationsSQL);
                        
                        while($row = $result->fetch_assoc()){
                            echo "<option value = ".$row['source'].">".$row['source']."</option>"; 
                        }
                            
                        ?>
                            
                        </optgroup>

                        

                    </select>
                </div>

                <div class="destination">
                    <label for="destination">Destination Station</label>
                    <br>
                    <select name="destinationStation" id="destination" required >
                        

                        <optgroup label="Destination Stations">
                        <?php   $destinationStationsSQL = "SELECT destination FROM stations";
                        $result = $conn->query($destinationStationsSQL);
                        
                        while($row = $result->fetch_assoc()){
                            echo "<option value = ".$row['destination'].">".$row['destination']."</option>"; 
                        }
                                
                        ?>
                           
                        
                    </select>
                </div>
            </div>

            <div class="date-and-time">
                <div class="date">
                    <label for="date">Date</label>
                    <br>
                    <input type="date" id="date" name = 'date' required>
                </div>

                <div class="time">
                    <label for="time">Time</label>
                    <br>
                    <input type="time"  id="time" name = 'time' required>
                </div>
            </div>

            <div class="oneWay-twoWay">
                <input id="oneWay" type="radio" value="One Way" name="way" required>
                <label for="oneWay">One way trip</label>

                <br>

                <input id="twoWay" type="radio" value="Two Way" name="way" required>
                <label for="twoWay">Two way trip</label>
            </div>
            <div class="firstClass-secondClass">
                <input id="firstClass" type="radio" value="First Class" name="class" required>
                <label for="firstClass">1st - Class Carriage</label>

                <br>

                <input id="secondClass" type="radio" value="Second Class" name="class" required>
                <label for="secondClass">2nd - Class Carriage</label>
            </div>



            <div class="no-of-tickets">
                <label for="noTickets">Enter the number of tickets: </label>
                <input id="noTickets" type="number" name = 'ticketCount' max="20" min="1" step="1" value="1">
            </div>

            <div class="ticket-price">
                <label for="ticketPrice">Subtotal: </label>
                <input id="ticketPrice" name="ticketPrice" type="number" max="1000" min="10" value="10">
            </div>



            <div class="submit-and-reset">
                <input type="submit" value="Book Now" id="submit" name = 'submit'>

                <!-- <input type="reset" value="Reset" id="reset"> -->
            </div>


        </div>


    </form>
    <br>
    <br>
    <br>
    <?php 
    if(isset($_POST['submit'])){
   

        $source = $_POST['sourceStation'];
        $destination = $_POST['destinationStation'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $trip_type_retriever = $_POST['way'];
        $trip_class_retriever = $_POST['class'];
        $ticketCount = $_POST['ticketCount'];
        
        if($trip_type_retriever == "One Way")
            $tripType = "One way trip";
        else if($trip_type_retriever == "Two Way")
            $tripType = "Two way trip"; 

        
        if($trip_class_retriever == "First Class" )
            $tripClass = "1st - Class Carriage";
        else if($trip_class_retriever == "Second Class")
            $tripClass = "2nd - Class Carriage";
    
        
    
        
        
        $query = "INSERT INTO tickets (source, destination, date, time, trip_type, trip_class, ticketCount) 
        VALUES 
        ('$source' , '$destination', '$date', '$time', '$tripType', '$tripClass', '$ticketCount')";
    
        $sql = mysqli_query($conn,$query);
            if($sql){
                echo "Ticket Booked Succesfully!";
                echo "<script>alert('Ticket booked successfully!');</script>";
            }
        else
            echo "Ticket not booked!, check for errors";
    
       
    
    
        
    }
    
    ?>
    
</body>

</html>
