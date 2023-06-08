<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial scale = 1">
        <link rel="icon" href="images/BlackLogo.png">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <title>ANIMANIAC - Create Account</title>
        <link rel="stylesheet" href="css/login-signin.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    </head>
    <body>
         <!-- Header -->
    <!-- Header -->
	<?php include 'header.php'; ?>
        <!--  -->
        <div class="signin">
            <div method="post" action="signup.php" id="form-signin">
                <div id="signin-text">
                    CREATE ACCOUNT
                </div>
                <div>
                    <input type="text" id="name" name="name" placeholder="Full Name" required><br>
                </div>
                <div>
                    <input type="text" id="username" name="username" placeholder="Username" required><br>
                </div>
                <div>
                    <input type="email" id="email" name="email" placeholder="Email" required><br>
                </div>
                <div>
                    <input type="password" id="password" name="password" placeholder="Password" required><br>
                </div>
                <div>
                    <input type="password" id="retype-password" name="retype-password" placeholder="Re-type Password" required><br>
                </div>
                <div>
                    By clicking Sign Up, you agree to our Terms, <u>Privacy Policy</u> and <u>Cookies Policy</u>.
                </div>
                <button id="sign-up">Sign Up</button><br>
                <div>
                    <label for="new-acc">Have an account?</label>
                    <a href="log-in.php">Log in</a>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php
            include 'footer.php';
    ?>
    </body>
</html>