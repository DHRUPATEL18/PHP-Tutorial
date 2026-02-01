<?php
    include "connect.php";

    $pid = $_REQUEST['pid'];

    $sql_qr = "SELECT `ID`, `ProductID`, `ProductName`, `Decription` FROM `product_info` WHERE `ProductID` = '$pid'";

    $res = mysqli_query($cn, $sql_qr);
    $row = mysqli_fetch_array($res);

    if ($row) {
        ?>
        <p>Product Name: <?= $row['ProductName']; ?></P>
        <p>description: <?= $row['Decription']; ?></p>
        <?php
    } else {
        ?>
        <P>Product Not Found</p>
        <?php
    }
?>