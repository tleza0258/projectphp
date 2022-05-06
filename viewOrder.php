<?php 
    session_start();
    require_once './server.php';

    if (!isset($_SESSION['username'])) {
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

    $query = "SELECT * FROM order";
    $result = mysqli_query($conn , $query);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart2.css">
    <link rel="stylesheet" href="./navbarOnly.css" media="screen">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>view Order</title>
</head>
<body>
    
    <?php include './header.php'; ?>

    <div class="w-full flex justify-center mt-10">

        <div class="8/12 flex flex-col gap-4">

            <?php 
                while ($val = $result->fetch_assoc()):
            ?>

                <div class="w-full">
                    <p><?php echo $val['username']; ?></p>
                    <p><?php echo $val['book']; ?></p>
                    <p><?php echo $val['unit']; ?></p>
                    <p><?php echo $val['price']; ?></p>
                </div>

            <?php 
                endwhile;
            ?>

        </div>

    </div>


</body>
</html>