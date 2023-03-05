<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!-- Add Bootstrap CDN links in the head section -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ms-3"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Login Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="includes/login.inc.php" method="post">
                            <div class="form-group">
                                <label for="email">Username:</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="psswrd">Password:</label>
                                <input type="password" class="form-control" name="psswrd" placeholder="Enter password">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php 
        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
                echo "<p>Please fill in all fields!</p>";
            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login information. Please try again.</p>";
            }
        }
    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>