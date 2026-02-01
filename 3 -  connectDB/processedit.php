<?php
    include "connect.php";

    $id = $_POST['id'];
    $nm = $_POST['name'];
    $uid = $_POST['uid'];
    $pass = $_POST['pass'];

    $sql_qr = "UPDATE `info` SET `NAME`='$nm', `UID`='$uid', `PASSWORD`='$pass' WHERE `ID`='$id'";

    mysqli_query($cn, $sql_qr);

    $raf = mysqli_affected_rows($cn);
    if($raf > 0){
        $msg = "Data Updated Successfully.";
    }
    else{
        $msg = "Data Not Updated!";
    }

    // URL Re-Write Method
    header("Location: Data.php?msg=$msg");
?>