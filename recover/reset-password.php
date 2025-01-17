<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/chatlink/img/logo.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>ChatLine - Reset Password</title>
    <script src="../js/checkTheme.js"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>

    <div class="container">
        <form action="./process.php" method="post">
            <h1>Reset Password</h1>
            <div class="content">
                <div class="input-box">
                    <label for="password">Password</label>
                    <button id="show-pass">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                    <input type="hidden" name="email" value="<?php
                                                                if (isset($_GET["email"])) {
                                                                    echo $_GET["email"];
                                                                } else {
                                                                    echo "";
                                                                }
                                                                ?>">
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>

                <div class="input-box">
                    <label for="confirm-password">Confirm Password</label>
                    <button id="show-conf-pass">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password">
                </div>
            </div>
            <div class="button-container">
                <input type="submit" value="Confirm" name="confirm" id="confirm">
            </div>
        </form>
    </div>

    <?php
    require_once "../php/footer.php";
    ?>

    <script src="./reset.js"></script>
</body>

</html>