<?php

$servername = "162.241.226.202";
$username = "dtyarnor_user";
$password = "4!RQm-XEsnT$:ka";
$dbname = "dtyarnor_yarnOrder";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// check if the table name and row ID were provided
if (isset($_POST['table_name']) && isset($_POST['row_id'])) {
    $table_name = $_POST['table_name'];
    $row_id = $_POST['row_id'];

    // delete the row from the database
    $sql = "DELETE FROM $table_name WHERE id = $row_id";
    mysqli_query($conn, $sql);
}

// redirect back to the previous page
header("Location: receive.php?set=$table_name");
exit();
?>