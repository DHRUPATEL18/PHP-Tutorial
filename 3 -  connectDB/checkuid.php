<?php 
    include 'db.php';
    
    $uid = $_REQUEST['uid'];
    $sql_qr = "SELECT COUNT(*) AS CNT FROM `INFO` WHERE UID='$uid'";

    $res = mysqli_query($cn, $sql_qr);
    
    $row = mysqli_fetch_array($res);
    echo $row['CNT'];
?>