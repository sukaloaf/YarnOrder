<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Yarn Order Center</title>
</head>

<body>
    <div class="title text-center">
        <h1>Receiving</h1>
    </div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ms-3"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Receiving</li>
            </ol>
        </nav>
    </div>
    <div class="container text-center">
        <div class="row mt-5">
            <div class="col">
                <a href="receive.php?set=A0">
                    <button type="button" class="myBtn1 position-relative">A0
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="a0_noti">
                        </span></button>
                </a>
            </div>
            <div class="col">
                <a href="receive.php?set=B0">
                    <button type="button" class="myBtn1 position-relative">B0
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="b0_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col">
                <a href="receive.php?set=C0">
                    <button type="button" class="myBtn1 position-relative">C0
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="c0_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col">
                <a href="receive.php?set=D0">
                    <button type="button" class="myBtn1 position-relative">D0
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="d0_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col">
                <a href="receive.php?set=E0">
                    <button type="button" class="myBtn1 position-relative">E0
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="e0_noti">
                        </span>
                    </button>
                </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <a href="receive.php?set=A1">
                    <button type="button" class="myBtn1 position-relative">A1
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="a1_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col">
                <a href="receive.php?set=B1">
                    <button type="button" class="myBtn1 position-relative">B1
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="b1_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <a href="receive.php?set=A2">
                    <button type="button" class="myBtn1 position-relative">A2
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="a2_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col">
                <a href="receive.php?set=B2">
                    <button type="button" class="myBtn1 position-relative">B2
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="b2_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col">
                <a href="receive.php?set=C2">
                    <button type="button" class="myBtn1 position-relative">C2
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="c2_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col">
                <a href="receive.php?set=D2">
                    <button type="button" class="myBtn1 position-relative">D2
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="d2_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
</body>

</html>
<!-- Script Start -->
<script>
setInterval(async function() {
    try {
        const response = await fetch("data.php?set=A0");
        if (response.ok) {
            notificationCount = await response.text();
            const badgeElement = document.getElementById("a0_noti");
            if (notificationCount > 0) {
                badgeElement.textContent = notificationCount;
                badgeElement.style.display = "block";
            } else {
                badgeElement.style.display = "none";
            }
        } else {
            console.error(
                "Error updating notification badge: " + response.statusText
            );
        }
    } catch (error) {
        console.error("Error updating notification badge: " + error);
    }
}, 1000);
</script>

<script>
setInterval(async function() {
    try {
        const response = await fetch("data.php?set=B0");
        if (response.ok) {
            notificationCount = await response.text();
            const badgeElement = document.getElementById("b0_noti");
            if (notificationCount > 0) {
                badgeElement.textContent = notificationCount;
                badgeElement.style.display = "block";
            } else {
                badgeElement.style.display = "none";
            }
        } else {
            console.error(
                "Error updating notification badge: " + response.statusText
            );
        }
    } catch (error) {
        console.error("Error updating notification badge: " + error);
    }
}, 1000);
</script>

<script>
setInterval(async function() {
    try {
        const response = await fetch("data.php?set=C0");
        if (response.ok) {
            notificationCount = await response.text();
            const badgeElement = document.getElementById("c0_noti");
            if (notificationCount > 0) {
                badgeElement.textContent = notificationCount;
                badgeElement.style.display = "block";
            } else {
                badgeElement.style.display = "none";
            }
        } else {
            console.error(
                "Error updating notification badge: " + response.statusText
            );
        }
    } catch (error) {
        console.error("Error updating notification badge: " + error);
    }
}, 1000);
</script>

<script>
setInterval(async function() {
    try {
        const response = await fetch("data.php?set=D0");
        if (response.ok) {
            notificationCount = await response.text();
            const badgeElement = document.getElementById("d0_noti");
            if (notificationCount > 0) {
                badgeElement.textContent = notificationCount;
                badgeElement.style.display = "block";
            } else {
                badgeElement.style.display = "none";
            }
        } else {
            console.error(
                "Error updating notification badge: " + response.statusText
            );
        }
    } catch (error) {
        console.error("Error updating notification badge: " + error);
    }
}, 1000);
</script>

</script>

<script>
setInterval(async function() {
    try {
        const response = await fetch("data.php?set=E0");
        if (response.ok) {
            notificationCount = await response.text();
            const badgeElement = document.getElementById("e0_noti");
            if (notificationCount > 0) {
                badgeElement.textContent = notificationCount;
                badgeElement.style.display = "block";
            } else {
                badgeElement.style.display = "none";
            }
        } else {
            console.error(
                "Error updating notification badge: " + response.statusText
            );
        }
    } catch (error) {
        console.error("Error updating notification badge: " + error);
    }
}, 1000);
</script>

<script>
setInterval(async function() {
    try {
        const response = await fetch("data.php?set=A1");
        if (response.ok) {
            notificationCount = await response.text();
            const badgeElement = document.getElementById("a1_noti");
            if (notificationCount > 0) {
                badgeElement.textContent = notificationCount;
                badgeElement.style.display = "block";
            } else {
                badgeElement.style.display = "none";
            }
        } else {
            console.error(
                "Error updating notification badge: " + response.statusText
            );
        }
    } catch (error) {
        console.error("Error updating notification badge: " + error);
    }
}, 1000);
</script>

<script>
setInterval(async function() {
    try {
        const response = await fetch("data.php?set=A2");
        if (response.ok) {
            notificationCount = await response.text();
            const badgeElement = document.getElementById("a2_noti");
            if (notificationCount > 0) {
                badgeElement.textContent = notificationCount;
                badgeElement.style.display = "block";
            } else {
                badgeElement.style.display = "none";
            }
        } else {
            console.error(
                "Error updating notification badge: " + response.statusText
            );
        }
    } catch (error) {
        console.error("Error updating notification badge: " + error);
    }
}, 1000);
</script>

<script>
setInterval(async function() {
    try {
        const response = await fetch("data.php?set=B1");
        if (response.ok) {
            notificationCount = await response.text();
            const badgeElement = document.getElementById("b1_noti");
            if (notificationCount > 0) {
                badgeElement.textContent = notificationCount;
                badgeElement.style.display = "block";
            } else {
                badgeElement.style.display = "none";
            }
        } else {
            console.error(
                "Error updating notification badge: " + response.statusText
            );
        }
    } catch (error) {
        console.error("Error updating notification badge: " + error);
    }
}, 1000);
</script>

<script>
setInterval(async function() {
    try {
        const response = await fetch("data.php?set=B2");
        if (response.ok) {
            notificationCount = await response.text();
            const badgeElement = document.getElementById("b2_noti");
            if (notificationCount > 0) {
                badgeElement.textContent = notificationCount;
                badgeElement.style.display = "block";
            } else {
                badgeElement.style.display = "none";
            }
        } else {
            console.error(
                "Error updating notification badge: " + response.statusText
            );
        }
    } catch (error) {
        console.error("Error updating notification badge: " + error);
    }
}, 1000);
</script>

<script>
setInterval(async function() {
    try {
        const response = await fetch("data.php?set=C2");
        if (response.ok) {
            notificationCount = await response.text();
            const badgeElement = document.getElementById("c2_noti");
            if (notificationCount > 0) {
                badgeElement.textContent = notificationCount;
                badgeElement.style.display = "block";
            } else {
                badgeElement.style.display = "none";
            }
        } else {
            console.error(
                "Error updating notification badge: " + response.statusText
            );
        }
    } catch (error) {
        console.error("Error updating notification badge: " + error);
    }
}, 1000);
</script>

<script>
setInterval(async function() {
    try {
        const response = await fetch("data.php?set=D2");
        if (response.ok) {
            notificationCount = await response.text();
            const badgeElement = document.getElementById("d2_noti");
            if (notificationCount > 0) {
                badgeElement.textContent = notificationCount;
                badgeElement.style.display = "block";
            } else {
                badgeElement.style.display = "none";
            }
        } else {
            console.error(
                "Error updating notification badge: " + response.statusText
            );
        }
    } catch (error) {
        console.error("Error updating notification badge: " + error);
    }
}, 1000);
</script>
<!-- Script End -->