<?php
	//Add Database Connection
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	
	$conn = $db_handle->connectDB();
	
	// Test Database Connection
	if (!$conn)
  	{
  		$msg = "Could not connect to job portal Database. ".mysqli_error()." Click here to try again. <a href='index.php'> Home </a>";
		header ("Location: error.php?message=".$msg);
		exit();
  	}
	else
	{ 
		if (isset($_POST['add']))
    	{
			//Get Form Data
			$name = $_POST['pname'];
			$table = $_POST['cat'];
			$comp = $_POST['make'];
            $pric = $_POST['price'];
			$tech = $_POST['descrip'];
			

            if (($_FILES['myfile']['name']!=""))
			{
				// Where the file is going to be stored
				$target_dir = "image/access/";
				$target_sub_dir = "access/";
				
				$file = $_FILES['myfile']['name'];
				$path = pathinfo($file);
				$filename = $path['filename'];
				$ext = $path['extension'];
				
				$temp_name = $_FILES['myfile']['tmp_name'];
				
				$path_filename_ext = $target_dir.$filename.".".$ext;
				$path_filename_ext2 = $target_sub_dir.$filename.".".$ext;
				

                if (file_exists($path_filename_ext)) 
				{
					$msg = "Sorry, file already exists."." Click here to try again. <a href='admin.php'> Home </a>";
					header ("Location: error.php?message=".$msg);
					exit();				
				}
				else
				{
					move_uploaded_file($temp_name, $path_filename_ext);

					//Prepare SQL query
					$sql="INSERT INTO $table( `company`, `name`, `price`, `image`, `description`) VALUES('$comp','$name','$pric','$path_filename_ext','$tech')";

					$qry=mysqli_query($conn,$sql);

					if(!$qry)
					{
						$msg = "Insert operation error: Check your connection. <a href='admin.php'> Home </a>";
						header ("Location: error.php?message=".$msg);   
					}
					$msg = "addition of details is successful. <a href='admin.php'> Home </a>";
					header ("Location: confirm.php?message=".$msg);					
				}
			}
		}
	}
	mysqli_close($conn);
?>