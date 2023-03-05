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
$dbname = "dtyarnor_lists";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$output = "";

if (isset($_GET['search'])) {
    $input = $_GET['input'];
    
    if (!empty($input)) {
        
        $query = "SELECT * FROM `vendor` WHERE `vendorName` LIKE '%$input%' ORDER BY `vendorName` ASC";
        $query1 = "SELECT * FROM `vendor` ORDER BY `id` ASC";
        
        $res = mysqli_query($conn,$query);
        $res1 = mysqli_query($conn,$query1);
        
        $rowcount=mysqli_num_rows($res);
        
        $output .= "
            <table class='table table-bordered table-striped mt-2 text-center'>
                <tr>
                    <th>Vendor Name</th>
                    <th>Action</th>
                </tr>
        ";
        
        if (mysqli_num_rows($res) < 1) {
            while ($row = mysqli_fetch_array($res1)) {
                
                $output .="
                    <tr>
                        <td>".$row['vendorName']."</td>
                        <td>
                        <div class='row'>
                        <div class='col-lg-6 text-center m-auto'>
                            <a href='itemManageVendor.php?vendorName=".$row['vendorName']."'><button class='btn btn-primary'>Edit</button></a>
                        </div>
                        </div>
                        </td>
                    </tr>
                ";
            }
        }else{
            while ($row = mysqli_fetch_array($res)) {
                
                $output .="
                    <tr>
                        <td>".$row['vendorName']."</td>
                        <td>
                        <div class='row'>
                        <div class='col-lg-6 text-center m-auto'>
                            <a href='itemManageVendor.php?vendorName=".$row['vendorName']."'><button class='btn btn-primary'>Edit</button></a>
                        </div>
                    </div>
                    </td>
                    </tr>
                ";
            }
        }
    }
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

    <style>
    .Title {
        font-size: 36px;
        color: black;
        text-decoration: none;
    }

    .Title:hover {
        color: rgb(69, 69, 69);
    }
    </style>

    <title>Vendor Search Page</title>
</head>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item ms-3"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="itemMenu.php">Item Menu</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Vendor Search Menu</li>
        </ol>
    </nav>
</div>

<a class="Title container d-flex justify-content-center my-4" href="vendorMenu.php?input=+-&search=Search">Vendor Search
    Page</a>

<body>
    <div class="container d-flex justify-content-center">
        <div class="col-md-12">
            <form method="get">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="input" class="form-control" placeholder="Search by Vendor">
                    </div>
                    <div class="col-md-3">
                        <input type="submit" name="search" class="searchBtn" value="Search">
                    </div>
                    <div class="col-md-3 align-middle text-end align-self-center">
                        <a href="itemManageVendor.php" class="btn btn-primary">+ Create NEW Vendor</a>
                    </div>
                </div>
            </form>
            <?php 
            echo $output;
        ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>