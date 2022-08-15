<?php session_start();
require_once 'database/dbConnection.php';
$stationId = $_GET['id'];


$sqlGetName = "SELECT * FROM stations WHERE station_id ='$stationId' ";
$result = mysqli_query($conn,$sqlGetName);

$row = mysqli_fetch_array($result);
if($row){
    $stationName = $row['stations'];
}
?>
<center><br><br><br><br><br><br><br><br>
<form action = "" method = 'POST'>

    Station Name <input type = 'text' name = 'station-name' required value = '<?php echo $stationName;?>' ><br><br>
                <input type = 'submit' name = 'submit-edit' value = 'Update'>

</form>
</center>

<?php

if(isset($_POST['submit-edit'])){



    $stationNAME = $_POST['station-name'];
    $updateNameSQL = "UPDATE stations SET stations = '$stationNAME' WHERE station_id = '$stationId' ";
    $execute = mysqli_query($conn,$updateNameSQL);

    if($execute){
        echo "<script>alert('Station name updated!');</script>";
        echo "<script>window.location.href = 'train-stations.php';</script>";
        
    }

}

?>
