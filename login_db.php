<?php
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $Username = mysqli_real_escape_string($conn, $_POST['username']);
        $Password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if (count($errors) == 0) {
            $query = "SELECT * FROM register WHERE username = '$Username' AND password = '$Password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                $_SESSION['username'] = $Username;
                $_SESSION['success'] = "Your are now logged in";
                header("location: index.php");
            } else {
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password!";
                header("location: login.php");
            }
    } else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
            header("location: login.php");
    }
    }
    
    

?>