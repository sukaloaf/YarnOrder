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

    $set = htmlspecialchars($_GET['set']);
              
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Yarn Order Center</title>
</head>

<body>
    <!-- Breadcrumb Start -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ms-3"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="orderMenu.php">Ordering</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo "$set" ?> Order</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->
    <!-- Order Form Start -->
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-12">
                <!-- Session Start -->
                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                <h4 class="alert alert-success"><?php echo $_SESSION['status']; ?></h4>
                <?php
                        unset($_SESSION['status']);
                    }
                ?>
                <!-- Session End -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h4><?php echo "$set" ?> Order Form
                            <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">Add More</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- POST to code.php -->
                        <form action="code.php?set=<?php echo "$set" ?>" method="POST">
                            <div class="main-form mt-3 border bottom">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-2 ps-1">
                                            <label for="">Weight</label>
                                            <input type="text" name="weight[]" maxlength="10" class="form-control"
                                                required placeholer="Weight" list="weightList">
                                            <datalist id="weightList">
                                                <?php 
                                                    include './Lists/weightList.php';
                                                ?>
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="">Color</label>
                                            <input type="text" name="color[]" maxlength="50" class="form-control"
                                                required placeholer="Color" list="colorList">
                                            <datalist id="colorList">
                                                <?php 
                                                    include './Lists/colorList.php';
                                                ?>
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="">Vendor</label>
                                            <input type="text" name="vendor[]" maxlength="50" class="form-control"
                                                required placeholer="Vendor" list="vendorList">
                                            <datalist id="vendorList">
                                                <?php 
                                                    include './Lists/vendorList.php';
                                                ?>
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="">RWS</label>
                                            <input type="text" name="rws[]" maxlength="3" class="form-control"
                                                placeholer="RWS" list="rwsList">
                                            <datalist id="rwsList">
                                                <option value="Yes" />
                                                <option value="No" />
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="">Machine</label>
                                            <input type="text" name="machine[]" maxlength="5" class="form-control"
                                                required placeholer="Machine" list="machineList">
                                            <datalist id="machineList">
                                                <option value="01" />
                                                <option value="02" />
                                                <option value="03" />
                                                <option value="04" />
                                                <option value="05" />
                                                <option value="06" />
                                                <option value="07" />
                                                <option value="08" />
                                                <option value="09" />
                                                <option value="10" />
                                                <option value="11" />
                                                <option value="12" />
                                                <option value="13" />
                                                <option value="14" />
                                                <option value="15" />
                                                <option value="16" />
                                                <option value="17" />
                                                <option value="18" />
                                                <option value="19" />
                                                <option value="20" />
                                                <option value="21" />
                                                <option value="22" />
                                                <option value="23" />
                                                <option value="24" />
                                                <option value="25" />
                                                <option value="26" />
                                                <option value="27" />
                                                <option value="28" />
                                                <option value="29" />
                                                <option value="30" />
                                                <option value="31" />
                                                <option value="32" />
                                                <option value="33" />
                                                <option value="34" />
                                                <option value="35" />
                                                <option value="36" />
                                                <option value="37" />
                                                <option value="38" />
                                                <option value="39" />
                                                <option value="40" />
                                                <option value="41" />
                                                <option value="42" />
                                                <option value="43" />
                                                <option value="44" />
                                                <option value="45" />
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="">Sensor</label>
                                            <input type="text" name="sensor[]" maxlength="5" class="form-control"
                                                placeholer="Sensor" list="sensorList">
                                            <datalist id="sensorList">
                                                <option value="01" />
                                                <option value="02" />
                                                <option value="03" />
                                                <option value="04" />
                                                <option value="05" />
                                                <option value="06" />
                                                <option value="07" />
                                                <option value="08" />
                                                <option value="09" />
                                                <option value="10" />
                                                <option value="11" />
                                                <option value="12" />
                                                <option value="13" />
                                                <option value="14" />
                                                <option value="15" />
                                                <option value="16" />
                                                <option value="17" />
                                                <option value="18" />
                                                <option value="19" />
                                                <option value="20" />
                                                <option value="21" />
                                                <option value="22" />
                                                <option value="23" />
                                                <option value="24" />
                                                <option value="25" />
                                                <option value="26" />
                                                <option value="27" />
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="">Quantity</label>
                                            <input type="number" name="quantity[]" min="0" max="99" class="form-control"
                                                required placeholer="Quantity" list="quantityList">
                                            <datalist id="quantityList">
                                                <option value="01" />
                                                <option value="02" />
                                                <option value="03" />
                                                <option value="04" />
                                                <option value="05" />
                                                <option value="06" />
                                                <option value="07" />
                                                <option value="08" />
                                                <option value="09" />
                                                <option value="10" />
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2 pe-1">
                                            <br>
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paste-new-forms"></div>

                            <button type="submit" name="save" class="btn btn-success mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Order Form End -->
    <!-- JQuery Script Start -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {

        $(document).on('click', '.remove-btn', function() {
            $(this).closest('.main-form').remove();
        });

        $(document).on('click',
            '.add-more-form',
            function() {
                $('.paste-new-forms').append('<div class="main-form mt-3 border bottom">\
                                <div class="row">\
                                    <div class="col">\
                                        <div class="form-group mb-2">\
                                            <label for="">Weight</label>\
                                            <input type="text" name="weight[]" maxlength="5" class="form-control" required\
                                                placeholer="Weight" list="weightList">\
                                                <datalist id="weightList">\
                                                <?php  include './Lists/weightList.php'; ?>\
                                            </datalist>\
                                        </div>\
                                    </div>\
                                    <div class="col">\
                                        <div class="form-group mb-2">\
                                            <label for="">Color</label>\
                                            <input type="text" name="color[]" maxlength="50" class="form-control" required\
                                                placeholer="Color" list="colorList">\
                                                <datalist id="colorList">\
                                                <?php include './Lists/colorList.php'; ?>\
                                            </datalist>\
                                        </div>\
                                    </div>\
                                    <div class="col">\
                                        <div class="form-group mb-2">\
                                            <label for="">Vendor</label>\
                                            <input type="text" name="vendor[]" maxlength="50" class="form-control" required\
                                                placeholer="Vendor" list="vendorList">\
                                                <datalist id="vendorList">\
                                                <?php include './Lists/vendorList.php'; ?>\
                                            </datalist>\
                                        </div>\
                                    </div>\
                                    <div class="col">\
                                        <div class="form-group mb-2">\
                                            <label for="">RWS</label>\
                                            <input type="text" name="rws[]" maxlength="3" class="form-control" placeholer="RWS" list="rwsList">\
                                            <datalist id="rwsList">\
                                                <option value="Yes" />\
                                                <option value="No" />\
                                            </datalist>\
                                        </div>\
                                    </div>\
                                    <div class="col">\
                                        <div class="form-group mb-2">\
                                            <label for="">Machine</label>\
                                            <input type="text" name="machine[]" maxlength="5" class="form-control" required\
                                                placeholer="Machine" list="machineList">\
                                                <datalist id="machineList">\
                                                <option value="01" />\
                                                <option value="02" />\
                                                <option value="03" />\
                                                <option value="04" />\
                                                <option value="05" />\
                                                <option value="06" />\
                                                <option value="07" />\
                                                <option value="08" />\
                                                <option value="09" />\
                                                <option value="10" />\
                                                <option value="11" />\
                                                <option value="12" />\
                                                <option value="13" />\
                                                <option value="14" />\
                                                <option value="15" />\
                                                <option value="16" />\
                                                <option value="17" />\
                                                <option value="18" />\
                                                <option value="19" />\
                                                <option value="20" />\
                                                <option value="21" />\
                                                <option value="22" />\
                                                <option value="23" />\
                                                <option value="24" />\
                                                <option value="25" />\
                                                <option value="26" />\
                                                <option value="27" />\
                                                <option value="28" />\
                                                <option value="29" />\
                                                <option value="30" />\
                                                <option value="31" />\
                                                <option value="32" />\
                                                <option value="33" />\
                                                <option value="34" />\
                                                <option value="35" />\
                                                <option value="36" />\
                                                <option value="37" />\
                                                <option value="38" />\
                                                <option value="39" />\
                                                <option value="40" />\
                                                <option value="41" />\
                                                <option value="42" />\
                                                <option value="43" />\
                                                <option value="44" />\
                                                <option value="45" />\
                                            </datalist>\
                                        </div>\
                                    </div>\
                                    <div class="col">\
                                        <div class="form-group mb-2">\
                                            <label for="">Sensor</label>\
                                            <input type="text" name="sensor[]" maxlength="5" class="form-control" placeholer="Sensor" list="sensorList">\
                                            <datalist id="sensorList">\
                                                <option value="01" />\
                                                <option value="02" />\
                                                <option value="03" />\
                                                <option value="04" />\
                                                <option value="05" />\
                                                <option value="06" />\
                                                <option value="07" />\
                                                <option value="08" />\
                                                <option value="09" />\
                                                <option value="10" />\
                                                <option value="11" />\
                                                <option value="12" />\
                                                <option value="13" />\
                                                <option value="14" />\
                                                <option value="15" />\
                                                <option value="16" />\
                                                <option value="17" />\
                                                <option value="18" />\
                                                <option value="19" />\
                                                <option value="20" />\
                                                <option value="21" />\
                                                <option value="22" />\
                                                <option value="23" />\
                                                <option value="24" />\
                                                <option value="25" />\
                                                <option value="26" />\
                                                <option value="27" />\
                                            </datalist>\
                                        </div>\
                                    </div>\
                                    <div class="col">\
                                        <div class="form-group mb-2">\
                                            <label for="">Quantity</label>\
                                            <input type="number" name="quantity[]" max="99" class="form-control" required\
                                                placeholer="Quantity" list="quantityList">\
                                                <datalist id="quantityList">\
                                                <option value="01" />\
                                                <option value="02" />\
                                                <option value="03" />\
                                                <option value="04" />\
                                                <option value="05" />\
                                                <option value="06" />\
                                                <option value="07" />\
                                                <option value="08" />\
                                                <option value="09" />\
                                                <option value="10" />\
                                            </datalist>\
                                        </div>\
                                    </div>\
                                    <div class="col">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });
    });
    </script>
    <!-- JQuery Script End -->

</html>