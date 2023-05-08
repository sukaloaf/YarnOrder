<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css" />

    <title>Sign Up</title>
</head>

<body>

    <section class="signup-form">

        <h2 class="d-flex justify-content-center">Sign Up</h2>

        <div class="d-flex justify-content-center">
            <form action="includes/signup.inc.php" method="post">
                <div class="my-2">
                </div>
                <div class="my-2">
                    <input type="text" name="email" placeholder="Email...">
                </div>
                <div class="my-2">
                    <input type="password" name="psswrd" placeholder="Password...">
                </div>
                <div class="my-2">
                    <button class="btn0" type="submit" name="submit">Sign Up</button>
                </div>
            </form>
        </div>

        <div class="d-flex justify-content-center">
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Please fill in all fields!</p>";
                } else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Please use a valide email! (example: 'abc@123.com')</p>";
                } else if ($_GET["error"] == "emailtaken") {
                    echo "<p>Email is already in use. Please enter a different email.</p>";
                } else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong. Please try again.</p>";
                } else if ($_GET["error"] == "none") {
                    echo "<p>Sign up successful!</p>";
                }
            }
            ?>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>