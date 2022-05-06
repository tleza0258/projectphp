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


    $query = "SELECT * FROM cartoon";
    $result = mysqli_query($conn , $query);

?>
<!doctype html>
<html>
<head>
<style>
    body{
    background-color: whitesmoke;
    }
</style>
<meta charset="utf-8">
<title>BOOK</title>
    <link rel="stylesheet" href="./navbarOnly.css" media="screen">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <?php include './header.php' ?>

    <!-- <td>
        <img src="image/cd1.jpg" ><br>
        <b> Tokyo Ghoul: re </b></br><br>
        <a href="cart.html" class="button2"> เช่า </a></br><br></br>
    </td> -->
    <div class="w-full flex justify-center mt-20 mb-40">

        <div class="w-9/12 grid grid-cols-3 gap-x-24 gap-y-32 text-center">
        
            <?php 
                while ($val = $result->fetch_assoc()):
            ?>

            <div class="w-full flex flex-col gap-2 overflow-hidden justify-center">
                <a href="./detail.php?id=<?php echo $val['id'] ?>" class="w-full">
                    <img 
                        src="<?php echo $val['img'] ?>"
                        class="rounded-lg h-[620px] object-cover"
                    >
                </a>    
                <p class="text-lg"><?php echo $val['name'] ?></p>
                <p class="text-lg"><?php echo $val['price'] ?>&nbsp;&nbsp;Baht</p>
                <a class="w-full px-10 py-2.5 bg-indigo-600 text-white rounded-lg text-center" 
                    href="./cart.php?id=<?php echo $val['id'] ?>" class="w-full">
                    ซื้อเลย
                </a>
            </div>

            <?php 
                endwhile;
            ?>  
        </div>
    </div>


</body>
</html>