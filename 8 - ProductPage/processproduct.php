<?php 
$pn = $_REQUEST['pname'];
$pp = $_REQUEST['pprice'];
$ps = $_REQUEST['pstatus'];
$uploadDir = "Images/";

$cn = mysqli_connect("localhost", "root", "", "eproductdb");

$sql_qr = "INSERT INTO `product`(`NAME`, `PRICE`, `STATUS`) VALUES ('$pn','$pp','$ps')";

if (mysqli_query($cn, $sql_qr)) {
    $pid = mysqli_insert_id($cn);

    if (!empty($_FILES['pimg']['name'][0])) {
        foreach ($_FILES['pimg']['name'] as $key => $fileName) {
            $tmpName = $_FILES['pimg']['tmp_name'][$key];

            if ($fileName != "") {
                $targetPath = $uploadDir . basename($fileName);

                if (move_uploaded_file($tmpName, $targetPath)) {
                    $file_status = ($key == 0) ? "hero" : "sub";

                    $sql_qr2 = "INSERT INTO `product_files`(`PID`, `FILES`, `status`) 
                                VALUES ('$pid', '$fileName', '$file_status')";
                    mysqli_query($cn, $sql_qr2);
                }
            }
        }
        echo "Product and files uploaded successfully!";
    } else {
        echo "No files selected.";
    }

} else {
    echo "Product insert failed.";
}

mysqli_close($cn);
?>
