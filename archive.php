<?php
//Connects to database
session_start();
$servername = "162.241.226.202";
$username = "dtyarnor_user";
$password = "4!RQm-XEsnT$:ka";
$dbname = "dtyarnor_archive";
$conn = new mysqli($servername, $username, $password, $dbname);

$output = "";

//Page will change to whatever 'set' is equal to. Example "?set=A0" will show and pull information from what A0 is.
$set = htmlspecialchars($_GET['set']);

//Will organize from newest order in 12-hour format.
$query = "SELECT * FROM $set ORDER BY STR_TO_DATE(`delivered`, '%m/%d/%Y %h:%i %p') DESC ";

$res = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($res)) {

    $output .= "
            <tr>
            <td>" . $row['name'] . "</td>
            <td>" . $row['weight'] . "</td>
            <td>" . $row['color'] . "</td>
            <td>" . $row['vendor'] . "</td>
            <td>" . $row['rws'] . "</td>
            <td>" . $row['machine'] . "</td>
            <td>" . $row['sensor'] . "</td>
            <td>" . $row['quantity'] . "</td>
            <td>" . $row['time'] . "</td>
            <td>" . $row['delivered'] . "</td>
            </tr>
            ";
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Yarn Order Center</title>
</head>

<body>
    <div class="title text-center">
        <h1>
            <?php echo "$set" ?> Archive
        </h1>
    </div>
    <!-- Breadcrumb start -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ms-3"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="receiveMenu.php">Receiving</a>
                </li>
                <li class="breadcrumb-item"><a href="archiveMenu.php">Archive</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo "$set" ?> Archive
                </li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb Finish -->
    <div class="container d-flex justify-content-center">
        <div class="col">
            <table class='table table-bordered table-striped'>
                <tr>
                    <th>Name</th>
                    <th>Weight</th>
                    <th>Color</th>
                    <th>Vendor</th>
                    <th>RWS</th>
                    <th>Machine</th>
                    <th>Sensor</th>
                    <th>Quantity</th>
                    <th>Received</th>
                    <th>Delivered</th>
                </tr>
                <div class='row'>
                    <?php
                    echo $output;
                    ?>
                </div>
            </table>
        </div>
    </div>
</body>

</html>