<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial scale = 1">
        <link rel="icon" href="images/BlackLxswogo.png">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <title>ANIMANIAC - Log In</title>
        <link rel="stylesheet" href="css/login-signin.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    </head>
    <body>
         <!-- Header -->
    <!-- Header -->
	<?php include 'header.php'; ?>
        <!--  -->

        <div class="login">
            <form method="post" action="login.php" id="form-login">
                <div id="login-text">
                    LOG IN
                </div>
                <div>
                    <label for="username" id="info">Username</label><br>
                    <input type="text" id="username" name="username" placeholder="" required><br>
                </div>
                <div>
                    <label for="password" id="pass"> Password</label><br>
                    <input type="password" id="password" name="password" required><br>
                </div>
                <button id="log-in">Log in</button><br>
            </form>
        </div>
        <!-- Footer -->
        <?php
            include 'footer.php';
    ?>
    </body>
</html>