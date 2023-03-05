<?php ob_start(); ?>
<?php
    session_start();
?>
<?php
    if(!isset($_SESSION['usersemail'])) {
        header("location: ../login.php");
        exit();
}
?>
<?php

$servername = "162.241.226.202"; 
$username = "dtyarnor_user"; 
$password = "4!RQm-XEsnT$:ka";  
$dbname = "dtyarnor_login";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_close($conn);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

    <title>Item Menu</title>
</head>

<body>
    <header>
        <?php 
                        if (isset($_SESSION["usersemail"])) {
                            echo '
                            <a class="top-right-link" href="../includes/logout.inc.php">Logout</a>';
                        }
                        else {
                            echo '';
                        }
                    ?>
    </header>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ms-3"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Item Menu</li>
            </ol>
        </nav>
    </div>
    <div class="text-center mt-4">
        <h1>Item Menu</h1>
        <h2>What Would You Like To Update?</h2>
    </div>
    <div class="container text-center">
        <div class="row mt-5">
            <div class="col-4">
                <a href="weightMenu.php?input=+-&search=Search">
                    <button type="button" class="myBtn">Weight</button>
                </a>
            </div>
            <div class="col-4">
                <a href="colorMenu.php?input=+-&search=Search">
                    <button type="button" class="myBtn">Color</button>
                </a>
            </div>
            <div class="col-4">
                <a href="vendorMenu.php?input=+-&search=Search">
                    <button type="button" class="myBtn">Vendor</button>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>