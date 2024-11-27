<!DOCTYPE html>
<html lang="en">
<head>
    <?php include'head.php'?>
</head>
<body>
    <?php include'nav.php'?>

    <div class="bbody">
            <h1 align="center"> error Page </h1>
            <hr width="50%" size="2" color="black" />
            
            <?php	
                echo "<h2 align='center'>" . $_GET["message"] . "</h2>"; 
            ?>
        </div>

    <?php include'footer.php'?>
</body>
</html>