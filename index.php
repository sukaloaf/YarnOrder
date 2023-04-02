<?php
    session_start();
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
    <header>
        <?php 
                        if (isset($_SESSION["usersemail"])) {
                            echo '
                            <a class="top-right-link" href="Menus/itemMenu.php">Manage Items</a>';
                            echo '
                            <a class="top-right-link" href="includes/logout.inc.php">Logout</a>';
                        }
                        else {
                            echo '
                            <a class="top-right-link" href="./login.php"></a>';
                        }
                    ?>
    </header>
    <div class="text-center mt-4">
        <h1>Darn Tough Yarn Order Center</h1>
    </div>
    <div class="container text-center">
        <div class="row mt-5">
            <div class="col-6">
                <a href="orderMenu.php">
                    <button type="button" class="myBtn">Order</button>
                </a>
            </div>
            <div class="col-6">
                <a href="receiveMenu.php">
                    <button type="button" class="myBtn">Receive</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>