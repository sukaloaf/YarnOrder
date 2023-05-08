<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Yarn Order Center</title>
</head>

<body>
    <div class="title text-center">
        <h1>Order Archive</h1>
    </div>
    <!-- Breadcrumb Start -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ms-3"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="receiveMenu.php">Receiving</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Archive</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb Finish -->
    <!-- Set Select Start -->
    <!-- Empty divs are to prevent formatting errors -->
    <div class="container text-center mt-5">
        <div class="row d-flex justify-content-evenly mt-5">
            <div class="col">
                <a href="archive.php?set=A0">
                    <button type="button" class="myBtn1">A0</button>
                </a>
            </div>
            <div class="col">
                <a href="archive.php?set=B0">
                    <button type="button" class="myBtn1">B0</button>
                </a>
            </div>
            <div class="col">
                <a href="archive.php?set=C0">
                    <button type="button" class="myBtn1">C0</button>
                </a>
            </div>
            <div class="col">
                <a href="archive.php?set=D0">
                    <button type="button" class="myBtn1">D0</button>
                </a>
            </div>
            <div class="col">
                <a href="archive.php?set=E0">
                    <button type="button" class="myBtn1">E0</button>
                </a>
            </div>
        </div>
        <div class="row d-flex justify-content-evenly mt-5">
            <div class="col">
                <a href="archive.php?set=A1">
                    <button type="button" class="myBtn1">A1</button>
                </a>
            </div>
            <div class="col">
                <a href="archive.php?set=B1">
                    <button type="button" class="myBtn1">B1</button>
                </a>
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
        <div class="row justify-content-evenly mt-5">
            <div class="col">
                <a href="archive.php?set=A2">
                    <button type="button" class="myBtn1">A2</button>
                </a>
            </div>
            <div class="col">
                <a href="archive.php?set=B2">
                    <button type="button" class="myBtn1">B2</button>
                </a>
            </div>
            <div class="col">
                <a href="archive.php?set=C2">
                    <button type="button" class="myBtn1">C2</button>
                </a>
            </div>
            <div class="col">
                <a href="archive.php?set=D2">
                    <button type="button" class="myBtn1">D2</button>
                </a>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
    <!-- Set Select Finish -->
</body>

</html>