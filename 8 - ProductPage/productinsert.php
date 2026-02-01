<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Registration</title>
</head>
<body>
    <div class="con">
        <div class="title"><h1>Insert Product Details</h1></div>
        <div class="form">
            <form action="processproduct.php" method="post" enctype="multipart/form-data">
                Product Name : <input type="text" name="pname" placeholder="Enter Prdouct Name" require><br>
                Product Images : <input type="file" name="pimg[]" multiple><br>
                Product Price : <input type="text" name="pprice" placeholder="Enter Prdouct Price" require><br>
                Status :
                <input type="radio" id="active" name="pstatus" value="Active">
                <label for="active">Active</label>
                <input type="radio" id="nonactive" name="pstatus" value="Non-Active">
                <label for="nonactive">Non-Active</label>
                <input type="radio" id="disable" name="pstatus" value="Disable">
                <label for="disable">Disable</label>
            
                <br>
                <input type="submit" value="Upload" name="upldbtn">



            </form>
        </div>
    </div>
</body>
</html>