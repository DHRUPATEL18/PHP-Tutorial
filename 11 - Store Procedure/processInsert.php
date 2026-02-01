<?php 
    $cn = mysqli_connect("localhost", "root", "", "testdb");

    $nm = $_REQUEST['name'];
    $uid = $_REQUEST['uid'];
    $rl = $_REQUEST['role'];
    $inm = $_REQUEST['igname'];

    $sql_qr = "CALL gamers(?, ?, ?, ?)";
    $stmt = mysqli_prepare($cn, $sql_qr);
    mysqli_stmt_bind_param($stmt, "ssss", $nm, $uid, $rl, $inm);
    
    if(mysqli_stmt_execute($stmt)){
        echo "Data Inserted Into testdb Database";
    }else{
        echo "Error occur while inserting!!";
    }

?>