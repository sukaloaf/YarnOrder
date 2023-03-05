<?php ob_start(); ?>
<?php
    session_start();
?>
<?php
    if(!isset($_SESSION['usersemail'])) {
        header("location: ../login.php");
        exit();
}
?>
<?php
$servername = "162.241.226.202"; 
$username = "dtyarnor_user"; 
$password = "4!RQm-XEsnT$:ka";  
$dbname = "dtyarnor_lists";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$colorName     = $_REQUEST["colorName"] ?? "";    

$message        = array();                          
$action         = $_POST["action"] ?? "";            
takeAction($action);                                

$product        = getProduct($colorName);                     

$conn->close();        
?>


<html>

<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        // this is the text box that shows up if there is a message set by the "takeAction()" function
        if (count($message) > 0) { ?>
    <div class="container_fluid bg-<?= $message['type'] ?> h5 text-center p-3">
        <?= $message['text'] ?>
    </div>
    <?php } ?>
    <div class="container mt-3">

        <h1>Product Manager</h1>
        <div class="row">
            <div class="col">
                <h5>&lt;<a href="colorMenu.php?input=+-&search=Search">Back to Color Search Page</a></h5>
            </div>
            <div class="col align-middle text-end align-self-center">
                <?php if (!empty($product)) { ?>
                <a href="itemManage.php" class="btn btn-primary">+ Create NEW Color</a>
                <?php } ?>
            </div>

        </div>

        <div class="row">

            <!-- FORM -->

            <div class="col">
                <h3>Form</h3>
                <!-- Change this form to fit YOUR products -->
                <form action="itemManageColor.php" method="post">
                    <input value="<?= $product["colorName"] ?? "" ?>" placeholder="Color Name" id="colorName"
                        name="colorName" class="form-control" />

                    <!-- BUTTONS -->
                    <div class="text-center">
                        <?php if (empty($product)) { ?>
                        <a href="weightMenu.php?input=+-&search=Search" class="btn btn-warning mt-2">Cancel</a>
                        <button name="action" value="new" type="submit" class="btn btn-success mt-2">Create</button>
                        <?php } else { ?>
                        <button name="action" value="delete" type="submit" class="btn btn-danger mt-2">Delete</button>
                        <?php } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>










<?php
// ======================================
// FUNCTIONS
// ======================================


function takeAction($action) {
    switch($action) { 
        case "new":
            createProduct();
            break;
        case "save":
            updateProduct();
            break;
        case "delete":
            deleteProduct();
            break;
    }
}

// CREATE
function createProduct() {
    $sql = "INSERT INTO 
                color (
                    colorName)
            VALUES (?)";
    $stmt = $GLOBALS["conn"]->prepare($sql);

    if(isset($stmt)) { 
        $stmt->bind_param("s", 
            $_POST['colorName']
        );

        if ($stmt->execute() === TRUE) {
            $GLOBALS["colorName"] = $stmt->insert_id; // this returns the ID of the product that was JUST inserted
            $GLOBALS["message"]["text"] = "Product Created";
            $GLOBALS["message"]["type"] = "Success";
        } else {
            $GLOBALS["message"]["text"] = "The Product Could Not Be Created";
            $GLOBALS["message"]["type"] = "Danger";
        }
    }
}

//READ
function getProduct($colorName) {
    $rValue = array();
    $sql = "SELECT 
                *
            FROM
                color
            WHERE
                colorName = ?";
    
    $stmt = $GLOBALS["conn"]->prepare($sql);
    $stmt->bind_param("s", $colorName);
    $stmt->execute();
    $results = $stmt->get_result();  // mysqli_result object
    
    // if there is only 1 record, set rValue to the product array instead of a blank array
    if ($results->num_rows == 1) {
       $rValue = $results->fetch_assoc();   // gets the first row of the mysqli_result object. no need to loop because there is only one record      
    }
    
    return $rValue; // this return an array
}


// DELETE
function deleteProduct() {
    $sql = "DELETE FROM 
                color
            WHERE 
                colorName=?";
    $stmt = $GLOBALS["conn"]->prepare($sql);
    $stmt->bind_param("s", $_POST["colorName"]);
    $stmt->execute();

    if ($stmt->execute() === TRUE) {
        $GLOBALS["message"]["text"] = "Product Deleted";
        $GLOBALS["message"]["type"] = "Success";
    } else {
        $GLOBALS["message"]["text"] = "The Product Could NOT Be Deleted";
        $GLOBALS["message"]["type"] = "Danger";
        
    }
} 