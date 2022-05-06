<?php
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['req_user'])){
        $Username = mysqli_real_escape_string($conn, $_POST['username']);
        $Password = mysqli_real_escape_string($conn, $_POST['password']);
        $Name = mysqli_real_escape_string($conn, $_POST['name']);
        $Address = mysqli_real_escape_string($conn, $_POST['address']);
        $Email = mysqli_real_escape_string($conn, $_POST['email']);

        $user_check_query = "SELECT * FROM register WHERE username = '$Username' OR email = '$Email' LIMIT 1";
        $query = mysqli_query($conn , $user_check_query);
        
        if (count($errors) == 0){
            $sql = "INSERT INTO register (username, password, name, address,email) VALUES ('$Username' ,'$Password' ,'$Name' ,'$Address' ,'$Email')";
            mysqli_query($conn, $sql);
            
            $_SESSION ['username'] = $Username;
            $_SESSION ['success'] = "You are now logged in ";
            header('location: login.php');
        }else{
            header('location: register.php'); 
        }

    }
 
?>