<!DOCTYPE html>
<html lang="en">
<head>
    <?php include'head.php'?>
</head>
<body>
    <?php include'nav.php'?>
    <div class="col-12">
        <form name="fish" method="POST" action="saveproduct.php" enctype="multipart/form-data">
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
                        <label ><b>PRODUCT CATEGORY</b></label>
                    </td>
                    <td>
                        <select id="cat" name="cat"style="background-color:white;color:black;">
                            <option value="phone">PHONE</option>
                            <option value="laptop">LAPTOP</option>
                            <option value="ipadstablet">IPADS & TABLETS</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label ><b>PRODUCT MAKER</b></label>
                    </td>
                    <td>
                        <input type="text" name="make" id="make" required />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label ><b>PRODUCT PRICE</b></label>
                    </td>
                    <td>
                        <input type="text" name="price" id="price" required />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label ><b>PRODUCT DESCRIPTION</b></label>
                    </td>
                    <td>
                        <textarea name="descrip" id="descrip" cols="20" rows="50"></textarea>
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
                    <td colspan="2" align="RIGHT">
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