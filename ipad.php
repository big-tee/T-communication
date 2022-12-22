<?php  
    require_once("dbcontroller.php");
    $db_handle = new DBController();  
    
?>
<html lang="en">
<head>
    <?php include'head.php'?>
</head>
<body>
    <?php include'nav.php'?>

    <div class="col-12 ">
            <table class="text-center" width="100%"> 
                <tr style="color:green;">
                    <td><h1><b>IPADS</b></h1></td>
                </tr>
            </table>
            <div class="access">
                <?php
                    $ipad_array = $db_handle->runQuery("SELECT * FROM ipadstablet WHERE company ='apple'");
                    if (!empty($ipad_array)) 
                    { 
                        foreach($ipad_array as $key=>$value)
                        {
                ?> 
                    <form class="list" method="post" action="ipad.php?id=<?php echo $ipad_array[$key]["id"];?>" >
                        <div class="img text-center">    
                            <img src="<?php echo $ipad_array[$key]["image"]; ?>" height="110px" width="" />
                        </div>
                        <p>
                            <h4>PRODUCT NAME : <?php echo $ipad_array[$key]["name"];?></h4>
                        </p>
                    <div class="ccb">
                        <p>
                            <h5>DESCRIPTION :<?php echo $ipad_array[$key]["description"];?></h5>
                        </p>
                    </div>
                        <p>
                            <h4> PRICE(<span style='color:red;'>&#8358;</span>) : <?php echo number_format($ipad_array[$key]["price"],2); ?></h4>			
                        </p>
                    <div class="ccc">
                        <input type="hidden" name ="hidden_siz" value="<?php echo $ipad_array[$key]["name"];?>"/>
                        <input type="hidden" name ="hidden_qun" value="<?php echo $ipad_array[$key]["description"];?>"/>
                        <input type="hidden" name ="hidden_pric" value="<?php echo $ipad_array[$key]["price"];?>"/>


                        <input class="btn btn-warning  my-3 " type="submit" id="add" name="add" value="Add to cart"/>
                    </div>
                        </form>
            <?php
                    }
                }
            ?>
            </div>
            
            
        </div>


    <?php include'footer.php'?>
</body>
</html>