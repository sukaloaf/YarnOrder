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
    <header><a class="top-right-link" href="archiveMenu.php">Archive</a></header>
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
        <div class="row d-flex justify-content-evenly mt-5">
            <div class="col-2">
                <a href="receive.php?set=A0">
                    <button type="button" class="myBtn1 position-relative">A0
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="a0_noti">
                        </span></button>
                </a>
            </div>
            <div class="col-2">
                <a href="receive.php?set=B0">
                    <button type="button" class="myBtn1 position-relative">B0
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="b0_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col-2">
                <a href="receive.php?set=C0">
                    <button type="button" class="myBtn1 position-relative">C0
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="c0_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col-2">
                <a href="receive.php?set=D0">
                    <button type="button" class="myBtn1 position-relative">D0
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="d0_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col-2">
                <a href="receive.php?set=E0">
                    <button type="button" class="myBtn1 position-relative">E0
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="e0_noti">
                        </span>
                    </button>
                </a>
            </div>
        </div>
        <div class="row d-flex justify-content-evenly mt-5">
            <div class="col-2">
                <a href="receive.php?set=A1">
                    <button type="button" class="myBtn1 position-relative">A1
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="a1_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col-2">
                <a href="receive.php?set=B1">
                    <button type="button" class="myBtn1 position-relative">B1
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="b1_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col-2">

            </div>
            <div class="col-2">

            </div>
            <div class="col-2">

            </div>
        </div>
        <div class="row d-flex justify-content-evenly mt-5">
            <div class="col-2">
                <a href="receive.php?set=A2">
                    <button type="button" class="myBtn1 position-relative">A2
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="a2_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col-2">
                <a href="receive.php?set=B2">
                    <button type="button" class="myBtn1 position-relative">B2
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="b2_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col-2">
                <a href="receive.php?set=C2">
                    <button type="button" class="myBtn1 position-relative">C2
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="c2_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col-2">
                <a href="receive.php?set=D2">
                    <button type="button" class="myBtn1 position-relative">D2
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="d2_noti">
                        </span>
                    </button>
                </a>
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>
    <!-- Audio element for notification sound -->
    <audio id="notification-sound" src="notification.mp3"></audio>
    <!-- Script Start -->
    <script>
        // Create new audio element
        const notificationSound = new Audio("notification.mp3");
    </script>

    <script>
        $(document).ready(function () {
            setTimeout(function () {
                updateNotificationBadge("a0_noti", "data.php?set=A0");
                updateNotificationBadge("a1_noti", "data.php?set=A1");
                updateNotificationBadge("a2_noti", "data.php?set=A2");
                updateNotificationBadge("b0_noti", "data.php?set=B0");
                updateNotificationBadge("b1_noti", "data.php?set=B1");
                updateNotificationBadge("b2_noti", "data.php?set=B2");
                updateNotificationBadge("c0_noti", "data.php?set=C0");
                updateNotificationBadge("c2_noti", "data.php?set=C2");
                updateNotificationBadge("d0_noti", "data.php?set=D0");
                updateNotificationBadge("d2_noti", "data.php?set=D2");
                updateNotificationBadge("e0_noti", "data.php?set=E0");
                setInterval(function () {
                    updateNotificationBadge("a0_noti", "data.php?set=A0");
                    updateNotificationBadge("a1_noti", "data.php?set=A1");
                    updateNotificationBadge("a2_noti", "data.php?set=A2");
                    updateNotificationBadge("b0_noti", "data.php?set=B0");
                    updateNotificationBadge("b1_noti", "data.php?set=B1");
                    updateNotificationBadge("b2_noti", "data.php?set=B2");
                    updateNotificationBadge("c0_noti", "data.php?set=C0");
                    updateNotificationBadge("c2_noti", "data.php?set=C2");
                    updateNotificationBadge("d0_noti", "data.php?set=D0");
                    updateNotificationBadge("d2_noti", "data.php?set=D2");
                    updateNotificationBadge("e0_noti", "data.php?set=E0");
                }, 30000);
            }, 1);
        });

        async function updateNotificationBadge(badgeId, url) {
            try {
                const response = await fetch(url);
                if (response.ok) {
                    // Update the notification count and the badge
                    const notificationCount = await response.text();
                    const badgeElement = document.getElementById(badgeId);
                    if (notificationCount >= 1) {
                        // If notification count is greater than or equal to 1, update badge and play sound
                        badgeElement.textContent = notificationCount;
                        badgeElement.style.display = "block";
                        notificationSound.play();
                    } else {
                        badgeElement.style.display = "none";
                    }
                } else {
                    // An error occurred, display an error message
                    console.error("Error updating notification badge: " + response.statusText);
                }
            } catch (error) {
                console.error("Error updating notification badge: " + error);
            }
        }
    </script>
    <!-- Script End -->
</body>

</html>