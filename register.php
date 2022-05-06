<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title> Register </title>
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="center">
            <h1> Sign UP! </h1>
            <form method="post" action="register_db.php">
                <div class="txt_field">     
                    <input type = "text" name ="username"required>
                    <label for ="username"> Username </label>      
                </div>
                <div class="txt_field">           
                    
                    <input type = "password" name="password" required>
                    <label for ="password"> Password</label>
                </div>
                <div class="txt_field">      
                    
                    <input type = "text" name="name"required>
                    <label for="name"> Name </label>
                </div>
                <div class="txt_field">
                    
                    <input type = "text"  name="address" required>
                    <label for="address"> Address </label>
                </div>
                <div class="txt_field">             
                    
                    <input type = "text" name="email" required>
                    <label for="email"> E-Mail </label>
                </div>
                <input class="w-full py-1.5 px-4 bg-indigo-400 rounded-md shadow-lg cursor-pointer hover:bg-indigo-600" type="submit" value="Sign Up" name ="req_user">   
                <div class="signup_link">
                     Have an account? <a href="login.php"> Log in </a>
                </div>
            </form>
        </div>
    </body>
</html>
