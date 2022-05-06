<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="./navbarOnly.css" media="screen">
    <title> BOOK </title>
</head>
<body>
    
    <?php include './header.php' ?>
    
    <div id="slider">
        <figure >
            <img src="image/cd1.jpg">
            <img src="image/cd2.jpg">
            <img src="image/cd3.jpg">
            <img src="image/cd4.jpg">
            <img src="image/cd5.jpg">
            <img src="image/cd6.jpg">
            <img src="image/n1.png">
            <img src="image/n2.png">
            <img src="image/n3.png">
            <img src="image/n4.png">
            <img src="image/n5.png">
            <img src="image/n6.png">
            <img src="image/s1.jpg">
            <img src="image/s2.jpg">
            <img src="image/s3.jpg">
            <img src="image/s4.jpg">
            <img src="image/s5.jpg">
            <img src="image/s6.jpg">
            <img src="image/s7.jpg">
        </figure>

    <div class="bg"></div>

   
        <h1>Reccommend</h1>
        <form action="index.php"></form>
        <table>
            <tr>
            
                <td><img src="image/cd1.jpg"class = "reccommend"></td>
                <td><img src="image/cd2.jpg"class = "reccommend"></td>
                <td><img src="image/cd3.jpg"class = "reccommend"></td>
                <td><img src="image/cd4.jpg"class = "reccommend"></td>
                
            </tr>
        </table>
    <div class="bg"></div>
    <div class="Popular">
        <h1>Popular</h1>
        <form action="index.php"></form>
        <table>
            <tr>
                <td><img src="image/s1.jpg" class = "reccommend"></td>
                <td><img src="image/s2.jpg" class = "reccommend"></td>
                <td><img src="image/s3.jpg" class = "reccommend"></td>
                <td><img src="image/s4.jpg" class = "reccommend"></td>
            </tr>
        </table>
    </div>
    
    <div id="slider2">
        <figure >
            <!--<img src="image/1.jpg">
            <img src="image/2.jpg">
            <img src="image/3.jpg">
            <img src="image/4.jpg">
            <img src="image/6.jpg">
            <img src="image/7.jpg">        
            <img src="image/8.jpg">
            <img src="image/9.jpg">   
            <img src="image/10.jpg">   
            <img src="image/11.jpg">   
            <img src="image/12.jpg"> 
            <img src="image/13.jpg"> 
            <img src="image/14.jpg"> 
            <img src="image/15.jpg"> 
            <img src="image/16.jpg"> 
            <img src="image/17.jpg"> 
            <img src="image/18.jpg"> 
            <img src="image/19.jpg">   -->                       
        </figure>    
    
    </body>

</html>
</div>


