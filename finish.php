<?php  
    require_once("dbcontroller.php");
    $db_handle = new DBController();  
    
    
?>
<?php session_start(); ?>
<html lang="en">
<head>
    <?php include'heads.php'?>
</head>
<body>
    <?php include'nav.php'?>
    <div class="bbody">
            <div class="buycontainer">
                <form action="order.php" method="POST"> 
    
                    <table class="table">
                    <tr>
                        <th>item names</th>
                        <th>item price(<span style='color:red;'>&#8358;</span>)</th>
                        <th></th>
                    </tr>
                    <?php  
                     $output = "";
                     $total=0;
                     if(!empty($_SESSION['cart'])){

                        foreach($_SESSION['cart']as $key => $values){

                            $output .="
                            <tr> 
                                <td>". $values['name']."</td>
                                <td>".number_format( $values['price'],2)."</td>
                                
                                
                            </tr> 
                            
                            
                            ";
                            
                            $total= $total + $values['price'];
                            
                            
   
                        }
                    }
                        echo $output;

                       
                    ?>
                    </table >
                     </form>
                    
                     <form action="order.php" method="POST"> 
                    <table  class="table " >
                    <tr style="background:grey;color:powderblue;">
                        <td colspan="3" ><h2 align="center" >CUSTOMER'S INFORMATION</h2></td>
                    </tr>
                    <tr>
                        <td><label style="">firstName:</label></td>
                        <td colspan="2"><input type="text" id="cusnam" name="cusnam"  required/></td>
                    </tr>
                    <tr>
                        <td><label >phone number:</label></td>
                        <td colspan="2"><input type="text" id="cusph" name="cusph"  required/></td>
                    </tr>
                    <tr>
                        <td><label >Address:</label></td>
                        <td colspan="2"> <textarea rows ="5" cols="70" id="addr" name="addr" resize="none" style="background-color: white;border-color:black;color:black;" required></textarea></td>
                    </tr>
                    <tr>
                        <td><label >Email:</label></td>
                        <td colspan="2"><input type="email" id="cusmail" name="cusmail"  required/></td>
                    </tr>
                    <tr>
                        <td><label >Total(<span style='color:red;'>&#8358;</span>):</label></td>
                        <td colspan="2"><b><input style="font-weight:bold;" type="text" id="totalp" name="totalp" value="<?php echo $total ?>" readonly/></b></td>
                    </tr>

                    <tr>
                        <td colspan="2"></td>
                        <td align="right"><button class="button">
                         <span class="text">order</span>
                            <i class="fas fa-check icon"></i>
                    </button></i>
                        </button></td>
                    </tr>
                    </table>
                </fom>
               

                    
            </div>
    </div>




</body>
</html>