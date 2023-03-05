<?php
    session_start();
    $servername = "162.241.226.202"; 
    $username = "dtyarnor_user"; 
    $password = "4!RQm-XEsnT$:ka";  
    $dbname = "dtyarnor_yarnOrder";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $output = "";

    $set = htmlspecialchars($_GET['set']);

    $query = "SELECT * FROM $set ORDER BY `weight` ASC";

    $res = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_array($res)) {
                           
        $output .="
            <tr>
            <td>".$row['weight']."</td>
            <td>".$row['color']."</td>
            <td>".$row['vendor']."</td>
            <td>".$row['rws']."</td>
            <td>".$row['machine']."</td>
            <td>".$row['sensor']."</td>
            <td>".$row['quantity']."</td>
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
        <h1><?php echo "$set" ?> Yarn Order</h1>
    </div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ms-3"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="receiveMenu.php">Receiving</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo "$set" ?> Order</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php 
                    if(isset($_SESSION['status1']))
                    {
                        ?>
                <h4 class="alert alert-success"><?php echo $_SESSION['status1']; ?></h4>
                <?php
                        unset($_SESSION['status1']);
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="col">
            <table class='table table-bordered table-striped'>
                <tr>
                    <th>Weight</th>
                    <th>Color</th>
                    <th>Vendor</th>
                    <th>RWS</th>
                    <th>Machine</th>
                    <th>Sensor</th>
                    <th>Quantity</th>
                </tr>
                <div class='row'>
                    <?php     
        echo $output;
        ?>
                </div>
            </table>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="delete.php?set=<?php echo "$set" ?>" method="POST">
            <button type="submit" name="delet" class="btn btn-danger">Delete All</button>
        </form>
    </div>
</body>

</html>