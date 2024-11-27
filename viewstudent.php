<?php  
    require_once("dbcontroller.php");
    $db_handle = new DBController();  
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/divcss.css" rel='stylesheet' type='text/css' />
    <link href="css/styles.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

</head>
<body>
    <div class="col-12 ">
            <table class="text-center" width="100%"> 
                <tr style="color:green;">
                    <td><h1><b>ASUS LAPTOP</b></h1></td>
                </tr>
            </table>
            <div class="access">
                <?php
                    $stu_array = $db_handle->runQuery("SELECT * FROM studentdetails");
                    if (!empty($stu_array)) 
                    { 
                        foreach($stu_array as $key=>$value)
                        {
                ?> 
                    <form class="list" method="post" action="viewstudent.php?id=<?php echo $stu_array[$key]["id"];?>" >
                        <div class="img text-center">    
                            <img src="<?php echo $stu_array[$key]["pic"]; ?>" height="110px" width="" />
                        </div>
                        <p>
                            <h4>STUDENT NAME : <?php echo $stu_array[$key]["stuname"];?></h4>
                        </p>
                    <div class="ccb">
                        <p>
                            <h5>abstract :<?php echo $stu_array[$key]["abstract"];?></h5>
                        </p>
                    </div>
                        <p>
                           <h4> PRICE(<span style='color:red;'>&#8358;</span>) : <?php echo number_format($stu_array[$key]["regno"],2); ?></h4>		
                        </p>
                    <div class="ccc">
                        <input type="hidden" name ="hidden_siz" value="<?php echo $stu_array[$key]["stuname"];?>"/>
                        <input type="hidden" name ="hidden_qun" value="<?php echo $stu_array[$key]["abstract"];?>"/>
                        <input type="hidden" name ="hidden_pric" value="<?php echo $stu_array[$key]["regno"];?>"/>

                        <!-- Using Query String to pass data to product detail page -->
                        <input class="btn btn-secondary my-3" type="button" value="BUY NOW"/> 
                        </a>
                        <input class="btn btn-warning  my-3 " type="submit" id="add" name="add" value="Add to cart"/>
                    </div>
                        </form>
            <?php
                    }
                }
            ?>
            </div>
            
            
    </div>
</body>
</html>