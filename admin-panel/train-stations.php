<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-panel.css">
    <title>Document</title>
</head>


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
                <tbody>
                    <tr>
                        <td>Dummy Station</td>
                        <td>Dummy Station</td>
                    </tr>
                    <tr class="grey-tr">
                        <td>Dummy Station</td>
                        <td>Dummy Station</td>
                    </tr>
                    <tr>
                        <td>Dummy Station</td>
                        <td>Dummy Station</td>
                    </tr>
                    <tr class="grey-tr">
                        <td>Dummy Station</td>
                        <td>Dummy Station</td>
                    </tr>
                    <tr>
                        <td>Dummy Station</td>
                        <td>Dummy Station</td>


                    </tr>
                    <tr class="grey-tr">
                        <td>Dummy Station</td>
                        <td>Dummy Station</td>


                    </tr>
                    <tr>
                        <td>Dummy Station</td>
                        <td>Dummy Station</td>


                    </tr>
                    <tr class="grey-tr">
                        <td>Dummy Station</td>
                        <td>Dummy Station</td>
                    </tr>


                </tbody>
            </table>
        </div>

        <div class="centering">

        <div class="button-to-add-station">
            <button id="add-station-button" onclick="openForm()">Add Station</button>
        </div>

        <div class="button-to-delete-station">
            <input id="delete-station-button" type="button" value="Delete Station">
        </div>
        
    </div>


        <div class="form-popup" id="myForm">
            <form method="get" class="form-container">
                <h1>Add station</h1>
                <label for="station-name"><b>Station name</b></label>
                <input id="station-name" type="text" placeholder="Ex: 3abssya Station" name="station-name" required>

                <button type="submit" class="btn">Save</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
            </form>
        </div>
        <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>




    </div>

</body>

</html>