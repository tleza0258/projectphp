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
<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.tailwindcss.com"></script>
<style>

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart2.css">
    <link rel="stylesheet" href="./navbarOnly.css" media="screen">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>BOOK</title>
</head>
<body>
<?php include './header.php' ?>

    <table>
        <thead>
            <tr>
                <th>Product</th><th>Quantity</th><th>Price</th>
            </tr>
        </thead>
        
        <tr>
            <th class="img">
                <div class="w-full flex flex-col justify-center items-center">
                    <img src="<?php echo $result['img'] ?>"><br><?php echo $result['name'] ?>
                </div>
            </th>
            <th>
                <input id="unit" onchange="calPrice()" class="p-2 border-2 border-indigo-400 rounded-lg shadow-lg w-20 text-center" type="number" value="1" min="1">
            </th> 
            <th><span id="price"><?php echo $result['price'] ?></span>&nbsp;&nbsp;Baht</th>  
        </tr> 
    </table>  
    <br><br>
    
    <center>
        <button onclick="myFunction()">
            <a class="mt-10 w-11/12 mt-2 px-10 py-2.5 bg-indigo-600 text-white rounded-lg text-center"> ยืนยัน </a>
        </button>
    </center>

    
    
    <script>
        var price = <?php echo $result['price'] ?>;
        var unit = 1;
        console.log(price)
        var elementPrice = document.getElementById('price');

        function calPrice() {
            unit = parseFloat(document.querySelector('#unit').value);
            elementPrice.innerHTML = (parseFloat(price) * unit).toString();
        }

        function myFunction() {
            alert("สั่งซื้อสำเร็จ");
            window.location.href = 'index.php';
        }
    </script>
   
</body>

</html> 
