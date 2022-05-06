<header> 
    <div class="nav">
        <ul>
            <li class="home"><a href="index.php">HOME</a></li>
            <li class="Cartoon"><a href="booklist.php">BOOK LIST</a></li>     
            <?php if (isset($_SESSION['username'])) : ?>
            <li class="white"><?php echo($_SESSION['username']) ?></li>
            <li><a href="index.php?logout='1'">SIGN OUT </a></li>
            <?php endif ?>    
        </ul>
    </div>       
</header>