<?php
    session_start();
    include('server.php'); 

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="center">
            <h1> Login </h1>
            <form method="post" action = "login_db.php">
                <div class="txt_field">
                    <input type = "text" name = "username" required>
                    <label for ="username"> Username </label>
                </div>
                <div class="txt_field">
                    <input type = "password"  name = "password" required>
                    <label for = "password"> Password </label>
                </div>
                <input class="w-full py-1.5 px-4 bg-indigo-400 rounded-md shadow-lg cursor-pointer hover:bg-indigo-600" type="submit" value="Login" name = "login_user">
                <div class="signup_link">
                    Don't have an account? <a href="register.php"> Create </a>
                </div>
            </form>
        </div>
    </body>
</html>