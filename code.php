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


if(isset($_POST['save']))
{
    $weight = $_POST['weight'];
    $color = $_POST['color'];
    $vendor = $_POST['vendor'];
    $rws = $_POST['rws'];
    $machine = $_POST['machine'];
    $sensor = $_POST['sensor'];
    $quantity = $_POST['quantity'];

    foreach($weight as $index => $weights)
    {
        $s_weight = $weights;
        $s_color = $color[$index];
        $s_vendor = $vendor[$index];
        $s_rws = $rws[$index];
        $s_machine = $machine[$index];
        $s_sensor = $sensor[$index];
        $s_quantity = $quantity[$index];

        $set = mysqli_real_escape_string($conn, $_GET['set']);
        $query = "INSERT INTO $set (weight,color,vendor,rws,machine,sensor,quantity) VALUES ('$s_weight', '$s_color', '$s_vendor', '$s_rws', '$s_machine', '$s_sensor', '$s_quantity')";
        $query_run = mysqli_query($conn, $query);
    }

    if($query_run)
    {
        $_SESSION['status'] = "Submitted Successfully";
        header("Location: order.php?set=$set");
exit(0);
}
else
{
$_SESSION['status'] = "Data Not Inserted. Please Go Back To Prevent Errors";
header("Location: order.php?set=$set");
exit(0);
}
}