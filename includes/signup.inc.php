<?php 

if (isset($_POST["submit"])) {
    

    $email = $_POST["email"];
    $psswrd = $_POST["psswrd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    

    createUser($conn, $email, $psswrd);

}
else {
    header("location: ../signup.php");
    exit();
}