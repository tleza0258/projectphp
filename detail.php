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

    $id = $_GET['id'];

    $query = "SELECT * FROM cartoon WHERE id = " . $id . " LIMIT 1";
    $result = mysqli_query($conn , $query);
    $result = $result->fetch_assoc();
    
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
<body class="bg-gray-200">

    <?php include './header.php' ?>

    <div class="w-full">

        <div class="w-full mx-auto flex justify-center mt-10">
            
            <div class="w-6/12 bg-gray-100 p-10 rounded-lg shadow-lg grid grid-cols-2 gap-4 overflow-hidden">
                <div>
                    <img 
                        src="<?php echo $result['img'] ?>"
                        class="rounded-lg w-full object-cover"
                    >   
                </div>
                <div class="flex flex-col justify-center mx-auto items-center">
                    <p class="font-semibold text-3xl"><?php echo $result['name'] ?></p>
                    <p class="text-left indent-16 p-10">
                        <?php echo $result['info'] ?>
                    </p>
                    <p class="text-2xl font-semibold"><?php echo $result['price'] ?>&nbsp;&nbsp;Baht</p>
                    <a class="mt-10 w-11/12 mt-2 px-10 py-2.5 bg-indigo-600 text-white rounded-lg text-center" 
                        href="./cart.php?id=<?php echo $result['id'] ?>" class="w-full">
                        ซื้อเลย
                    </a>
                </div>
            </div>
            
        </div>

    </div>


</body>
</html>