<!DOCTYPE html>
<html lang="en">
<?php require_once './database/dbConnection.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/admin-panel.css">
    <title>Document</title>
</head>


<?php session_start();
    include 'navbar.php';?>


<body>
    <div class="sidenav">
        <a href="admin-panel.php">Dash Board</a>
        <a href="all-tickets.php">All Tickets</a>
    </div>

    <div class="body2">

        <div class="title">
            <p> <b>Train Stations</b></p>
        </div>

        <div class="users-table">
            <table>

                <thead>
                    <tr>
                        <th colspan="2">Stations</th>
                    </tr>
                </thead>

        <?php 





if(isset($_POST['submit'])){

$station = $_POST['station-name'];
$sql = "INSERT INTO stations (stations) VALUES ('$station')";
$query = mysqli_query($conn,$sql);


}






?>
                <?php  
                         
                         $sql = 'SELECT stations FROM stations ';
                         $result= mysqli_query($conn,$sql);
                         while ($row= mysqli_fetch_assoc($result)){
                         ?>
                                         <tbody>
                                     
                                             <tr class="grey-tr">
                                                 <td><?php echo $row['stations'] ?></td>
                                             </tr>
                         
                         
                                         </tbody>
                                         <?php
                         }
                         ?>
                         
                         
                                         
                                     </table>
                                 </div>
                

        <div class="centering">

        <div class="button-to-add-station">
            <button id="add-station-button" onclick="openForm()">Add Station</button>
        </div>
<!-- 
        <div class="button-to-delete-station">
            <input id="delete-station-button" type="button" value="Delete Station">
        </div> -->
        
    </div>


        <div class="form-popup" id="myForm">
            <form method="POST" class="form-container">
                <h1>Add station</h1>
                <label for="station-name"><b>Station name</b></label>
                <input id="station-name" type="text" placeholder="Ex: 3abssya Station" name="station-name" required>

                <button name ="submit" type="submit" class="btn">Save</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
            </form>
        </div>
        




    </div>

</body>
<script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>
</html>