<?php

$servername = "162.241.226.202"; 
$username = "dtyarnor_user"; 
$password = "4!RQm-XEsnT$:ka";  
$dbname = "dtyarnor_lists";
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT colorName FROM color";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . $row["colorName"] . '">';
}

mysqli_close($conn);
?>