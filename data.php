<?php

$servername = "162.241.226.202";
$username = "dtyarnor_user";
$password = "4!RQm-XEsnT$:ka";
$dbname = "dtyarnor_yarnOrder";
$conn = new mysqli($servername, $username, $password, $dbname);

$set = mysqli_real_escape_string($conn, $_GET['set']);
$sql = "SELECT * FROM $set";
$result = $conn->query($sql);

echo $result->num_rows;

$conn->close();
?>