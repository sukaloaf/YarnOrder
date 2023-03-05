<?php
    session_start();
    $servername = "162.241.226.202"; 
    $username = "dtyarnor_user"; 
    $password = "4!RQm-XEsnT$:ka";  
    $dbname = "dtyarnor_yarnOrder";
    $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
    }

if(isset($_POST['delet'])){
    $set = mysqli_real_escape_string($conn, $_GET['set']);
    $query = "truncate $set";
    $query_run = mysqli_query($conn, $query);
}

if($query_run)
    {
        $_SESSION['status1'] = "Deleted Successfully";
        header("Location: receive.php?set=$set");
exit(0);
}
else
{
$_SESSION['status1'] = "Data Not Deleted, Try Again";
header("Location: receive.php?set=$set");
exit(0);
}