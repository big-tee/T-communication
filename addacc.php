<!DOCTYPE html>
<html lang="en">
<head>
    <?php include'head.php'?>
</head>
<body>
    <?php include'nav.php'?>
    <div class="col-12">
        <form name="fish" method="POST" action="saveacc.php" enctype="multipart/form-data">
            <table class="table  ">
                <tr>
                    <th colspan="2" class=" text-center">
                        <h1><b><span style="color:blue;">ADDING PRODUCT's</span></b></h1>
                    </th>
                </tr>
                <tr>
                    <td align="right">
                        <label ><b>PRODUCT NAME</b></label>
                    </td>
                    <td>
                        <input type="text" name="pname" id="pname" required />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label ><b>PRODUCT PRICE</b></label>
                    </td>
                    <td>
                        <input type="text" name="pprice" id="pprice" required />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label ><b>PRODUCT DETAILS</b></label>
                    </td>
                    <td>
                        <input type="text" name="pdet" id="pdet" required />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label ><b>PRODUCT IMAGE</b></label>
                    </td>
                    <td>
                        <input type="file" name="myfile" id="myfile" required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button name="add" id="add">
                            ADD
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    

    <?php include'footer.php'?>
</body>
</html>