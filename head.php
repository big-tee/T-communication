<?php  
    require_once("dbcontroller.php");
    $db_handle = new DBController();  
 
session_start();

    require_once("dbcontroller.php");
    $db_handle = new DBController();  

    if(isset($_POST['add'])){
        if(isset($_SESSION['cart'])){
            $session_array_id = array_column($_SESSION['cart'],"id");

            if(!in_array($_GET['id'],$session_array_id)){
                $session_array = array(
                    'id' => $_GET['id'],
                    'name' => $_POST['hidden_siz'],
                    'price' => $_POST['hidden_pric']
                );
                $_SESSION['cart'][] = $session_array;

            }
        }
        else{
            $session_array = array(
                'id' => $_GET['id'],
                'name' => $_POST['hidden_siz'],
                'price' => $_POST['hidden_pric']
            );
            $_SESSION['cart'][] = $session_array;
        }
    } 
    


    
?>
    
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-COMMUNICATION</title>
    <script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 5);
		}
	</script>
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <script src="js/drop.js"></script>
