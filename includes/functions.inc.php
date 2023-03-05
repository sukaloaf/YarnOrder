<?php
function emptyInputSignup($email, $psswrd) {
    $result;
    if (empty($email) || empty($psswrd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function emailExists($conn, $email) {
    $sql = "SELECT * FROM users WHERE userName = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $email, $psswrd) {
    $sql = "INSERT INTO users (userName, userPassword) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPsswrd = password_hash($psswrd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $email, $hashedPsswrd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
        exit();
}

function emptyInputLogin($email, $psswrd) {
    $result;
    if (empty($email) || empty($psswrd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $psswrd) {
    $emailExists = emailExists($conn, $email);

    if ($emailExists === false) {
        header("location: ../login.php?error=wrongloginEmail");
        exit(); 
    }

    $psswrdHashed = $emailExists["userPassword"];
    $checkPsswrd = password_verify($psswrd, $psswrdHashed);

    if ($checkPsswrd === false) {
        header("location: ../login.php?error=wronglogin");
        exit(); 
    }
    else if ($checkPsswrd === true) {
        session_start();
        $_SESSION["usersid"] = $emailExists["ID"];
        $_SESSION["usersemail"] = $emailExists["userName"];
        header("location: ../Menus/itemMenu.php");
        exit(); 
    }
}