<?php  
    require_once("dbcontroller.php");
    $db_handle = new DBController();  
    
    
?>
 <?php 
 $count=0;
 if(isset($_SESSION['cart']))
   {
  $count=count($_SESSION['cart']);
  }
 ?>
<html lang="en">
<head>
<?php include'head.php'?>
</head>
<body>
    <div>
    <?php include'nav.php'?>
    <div class="col-12">
        <h1><b>PHONES</b></h1>
        <a href="phone.php" > 
            <button type="submit" class=" button.close btn btn-info my-2">
                view all
            </button>
        </a>
            <div class="access">
                <?php
                    $ac_array = $db_handle->runQuery("SELECT * FROM phonebr");
                    if (!empty($ac_array)) 
                    { 
                        foreach($ac_array as $key=>$value)
                        {
                ?> 
                    <form class="li" method="post" action="index.php" >
                    <div class="text-center">  
                        <p>
                            <a href="<?php echo $ac_array[$key]["brands"];?>.php"><h4><b><?php echo $ac_array[$key]["brands"];?></b></h4></a>
                        </p>
                        </div>
                    </form>
                    
                        <?php
                        }
                    }
                ?>
            </div>
            <h1><b>LAPTOPs</b></h1>
            <a href="laptop.php" >
                <button type="submit" class="button.close btn btn-info my-2">
                    view all
                </button>
            </a>
            <div class="access">
                <?php
                    $ac_array = $db_handle->runQuery("SELECT * FROM laptopbr");
                    if (!empty($ac_array)) 
                    { 
                        foreach($ac_array as $key=>$value)
                        {
                ?> 
                    <form class="li" method="post" action="index.php" >
                    <div class="text-center">  
                        <p>
                            <a href="<?php echo $ac_array[$key]["brands"];?>.php"><h4><b><?php echo $ac_array[$key]["brands"];?></b></h4></a>
                        </p>
                        </form>
                    </div>
                        <?php
                        }
                    }
                ?>
            </div>
            <h1><b>IPADS & TABLETS</b></h1>
            <a href="tab.php" >
                <button type="submit" class="button.close btn btn-info my-2">
                    view all
                </button>
            </a>
            <div class="access">
                <?php
                    $ac_array = $db_handle->runQuery("SELECT * FROM tabbr");
                    if (!empty($ac_array)) 
                    { 
                        foreach($ac_array as $key=>$value)
                        {
                ?> 
                    <form class="li" method="post" action="index.php" >
                    <div class="text-center">  
                        <p>
                            <a href="<?php echo $ac_array[$key]["brands"];?>.php"><h4><b><?php echo $ac_array[$key]["brands"];?></b></h4></a>
                        </p>
                        </form>
                    </div>
                        <?php
                        }
                    }
                ?>
            </div>
        </div>

        <div class="col-12 ">
            <table class="text-center" width="100%"> 
                <tr style="background:grey;">
                    <td><h1 id='access'><b>ACCESSORIES</b></h1></td>
                </tr>
            </table>
            <div class="access">
                <?php
                    $access_array = $db_handle->runQuery("SELECT * FROM access ORDER BY id ASC");
                    if (!empty($access_array)) 
                    { 
                        foreach($access_array as $key=>$value)
                        {
                ?> 
                    <form class="list" method="post" action="index.php?id=<?php echo $access_array[$key]["id"];?>" >
                        <div class="img text-center">    
                            <img src="<?php echo $access_array[$key]["image"]; ?>" height="110px" width="" />
                        </div>
                        <p>
                            <h4>PRODUCT NAME : <?php echo $access_array[$key]["name"];?></h4>
                        </p>
                    <div class="ccb">
                        <p>
                            <h5>DETAILS :<?php echo $access_array[$key]["details"];?></h5>
                        </p>
                    </div>
                        <p>
                            <h4> PRICE(<span style='color:red;'>&#8358;</span>) : <?php echo number_format($access_array[$key]["price"],2); ?></h4>			
                        </p>
                    <div class="ccc">
                        <input type="hidden" name ="hidden_siz" value="<?php echo $access_array[$key]["name"];?>"/>
                        <input type="hidden" name ="hidden_qun" value="<?php echo $access_array[$key]["details"];?>"/>
                        <input type="hidden" name ="hidden_pric" value="<?php echo $access_array[$key]["price"];?>"/>

                        <a href="buy.php?pimage=<?php echo $access_array[$key]["image"]; ?>&pname=<?php echo $access_array[$key]["name"]; ?>&pprice=<?php echo $access_array[$key]["price"]; ?>"> 
                        <!-- Using Query String to pass data to product detail page -->
                        <input class="btn btn-warning  my-3 " type="submit" id="add" name="add" value="Add to cart"/>
                    </div>
                        </form>
            <?php
                    }
                }
            ?>
            </div>
            
            
        </div>
    </div>
    <?php include'footer.php'?>

<!-- //magnific-popup -->

<!-- js -->

<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
</body>
</html>