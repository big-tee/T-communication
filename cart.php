<?php session_start(); ?>
<html lang="en">
<head>
    <?php include'heads.php'?>
</head>
<body>
    <?php include'nav.php'?>

    <div class="col-12 ">
            <table class="text-center" width="100%"> 
                <tr style="color:green;">
                    <td><h1><b>CART</b></h1></td>
                </tr>
            </table>
            
            </div>
            <div class="Cart-Container">
                <div class="Cart-Items">
                    <?php
                    
                    $total = 0;


                    $output = "";

                    $output .=" <table  width='80%'  class='table table-borderedd table-striped'>
                    <tr>
                        <th>item name</th>
                        <th>item price(<span style='color:red;'>&#8358;</span>)</th>
                        <th></th>
                    </tr>
                   
                    ";
                    if(!empty($_SESSION['cart'])){

                        foreach($_SESSION['cart']as $key => $values){

                            $output .="
                            <tr> 
                                <td>".$values['name']."</td>
                                <td>".number_format( $values['price'],2)."</td>
                                <td>
                                <a href='cart.php'>
                                <button class='btn btn-danger btn-block'>Remove</button>
                                </a>
                                </td>
                                
                            </tr> 
                            
                            ";

                            $total= $total + $values['price'];

                           

                        }
                        
                        $output .="
                        <tr>
                            <td colspan='2' align='right'></b>Total(<span style='color:red;'>&#8358;</span>)</b></td>
                            <td>".number_format($total,2)."</td>
                            <td>
                                <a href='cart.php?action=clearall'>
                                <button class='btn btn-warning btn-block'>Clear ALL</button>
                                </a>
                                </td>
                        </tr>
                        <tr>
                        <td colspan='4'>
                            <a href='finish.php'>
                            <button  class='btn btn-success btn-block'>Check Out</button>
                            </a>
                            </td>
                    </tr>
                        ";

                    }

                     echo $output;
                    ?>

<?php
                    
                    $total = 0;


                    $outputt = "";

                    $outputt .=" <table  width='80%'  class='table table-borderedd table-striped'>
                    <tr>
                        <th>item size</th>
                        <th>item quntity(<span style='color:red;'>kg</span>)</th>
                        <th>item price(<span style='color:red;'>&#8358;</span>)</th>
                        <th></th>
                    </tr>
                   
                    ";
                    if(!empty($_SESSION['cart'])){

                        foreach($_SESSION['cart']as $key => $values){

                            $outputt .="
                            <tr> 
                                <td>". $values['name']."</td>
                                <td>".number_format( $values['price'],2)."</td>
                            </tr> 
                            
                            ";

                            $total= $total + $values['price'];

                           

                        }
                        $outputt .="
                        <tr>
                            <td colspan='2' align='right'></b>Total(<span style='color:red;'>&#8358;</span>)</b></td>
                            <td>".number_format($total,2)."</td>
                        </tr>
                        ";

                    
                        $_SESSION['tsiz'] =  $values['name'];
                        $_SESSION['tpric'] =  $values['price'];
                        $_SESSION['ttot'] =  $total;


                    }
                    ?>

                     </table> 
                </div>

           
        </div>
    </div>
    <?php 
    if(isset($_GET['action'])){

        if($_GET['action']=="clearall"){
            unset($_SESSION['cart']);
        }

        if($_GET['action'] =="remove"){

            foreach($_SESSION['cart'] as $key => $values){

                if($values['id'] = $_GET['id']){
                    unset($_SESSION['cart']['id']);
                }
            }
        }
    }
    
    ?>
            
        </div>



</body>
</html>