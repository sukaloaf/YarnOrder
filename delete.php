<?php
    date_default_timezone_set('America/New_York');

    session_start();
    $servername = "162.241.226.202"; 
    $username = "dtyarnor_user"; 
    $password = "4!RQm-XEsnT$:ka";  
    $dbname = "dtyarnor_yarnOrder";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // create connection to new database
    $newServername = "162.241.226.202";  
    $newUsername = "dtyarnor_user";
    $newPassword = "4!RQm-XEsnT$:ka";  
    $newDbname = "dtyarnor_archive";
    $newConn = new mysqli($newServername, $newUsername, $newPassword, $newDbname);
    if ($newConn->connect_error) {
        die("Connection failed: " . $newConn->connect_error);
    }

    if(isset($_POST['delet'])){
        $set = mysqli_real_escape_string($conn, $_GET['set']);
        $query = "SELECT * FROM $set";
        $query_run = mysqli_query($conn, $query);
        
        // insert data from original database into new database
        while ($row = mysqli_fetch_assoc($query_run)) {
            $weight = $row['weight'];
            $color = $row['color'];
            $vendor = $row['vendor'];
            $rws = $row['rws'];
            $machine = $row['machine'];
            $sensor = $row['sensor'];
            $quantity = $row['quantity'];
            $time = $row['time'];
            $delivered = date('m/d/Y g:i A');
            $newQuery = "INSERT INTO $set (weight, color, vendor, rws, machine, sensor, quantity, time, delivered) VALUES ('$weight', '$color', '$vendor', '$rws', '$machine', '$sensor', '$quantity', '$time', '$delivered')";
            $newQuery_run = mysqli_query($newConn, $newQuery);
        }

        // delete data from original database
        $query = "TRUNCATE $set";
        $query_run = mysqli_query($conn, $query);

        if($query_run && $newQuery_run)
        {
            $_SESSION['status1'] = "Data Deleted Successfully";
            header("Location: receive.php?set=$set");
            exit(0);
        }
        else
        {
            $_SESSION['status1'] = "Data Not Deleted or Sent to New Database, Try Again";
            header("Location: receive.php?set=$set");
            exit(0);
        }
    }
?>
