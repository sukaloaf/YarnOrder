<?php

if (isset($_POST["submit"])) {
    
    $email = $_POST["email"];
    $psswrd = $_POST["psswrd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($email, $psswrd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $psswrd);   
}
else {
    header("location: ../login.php");
    exit(); 
}