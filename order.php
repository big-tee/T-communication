<?php  
session_start();
 require_once("dbcontroller.php");
 $db_handle = new DBController();
 
 $conn = $db_handle->connectDB();
 
 // Test Database Connection
 if (!$conn)
   {
     $msg = "error making order try again .".mysqli_connect_error()." Click here to try again. <a href='index.php'> Home </a>";
     header ("Location: error.php?message=".$msg);
     exit();
   }
   else
 { 
    if (isset($_POST['order']))
    {
      //Get Form Data
      $name = $_POST['cusnam'];
      $phone = $_POST['cusph'];
      $adr = $_POST['addr'];
      $email = $_POST['cusmail'];
      $tpri = $_POST['totalp'];

      $create_date = date("Y-m-d H:i:s");


      //Prepare SQL query
      $sql="INSERT INTO order(cname,caddress,cphone,cmail,price,dates)VALUES('$name','$phone','$adr','$email','$tpri','$create_date')";

      $qry=mysqli_query($conn,$sql);
      
      if (!$qry) 
      {
          //echo "<h1> goood work </h1>";
          $msg = "Insert operation error: Check your connection. <a href='buy.php.php'> Home </a>";
          header ("Location: error.php?message=".$msg);
      }				
      $msg = "YOUR ORDER is successful. <a href='index.php'> Home </a>";
      header ("Location: confirm.php?message=".$msg);			
     /* $id=mysqli_insert_id($conn);
      $sql2="INSERT INTO chartorder(goods,price)VALUES($cusnam ,$tpri )";
      $stmt=mysqli_prepare($conn,$sql2);
      if($stmt)
      {
        mysqli_stmt_bind_param($stmt,"isii",$id,$productname,$price);
        foreach($_SESSION['cart'] as $key => $values)
        {
          $productname = $values['name'];
         $price = $values['price'];
         mysqli_stmt_execute($stmt);

        }
       unset($_SESSION['cart']);
        echo "<script> 
         alert('order placed');
          window.location.href='index.php'
          </script>";

      }
      else
      {
        $msg = "sql prepare operation error: Check your connection. <a href='chart.php'> Home </a>";
        header ("Location: error.php?message=".$msg);
      }*/

          
    
    }
	}
	mysqli_close($conn);
?>


