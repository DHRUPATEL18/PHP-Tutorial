<?php
    $cn = mysqli_connect("localhost", "root", "", "empdb"); 

    $nm = $_REQUEST['name'];
    $ag = $_REQUEST['age'];
    $py = $_REQUEST['payroll'];

    $sql_qr = "INSERT INTO `emp_info`(`ID`, `NAME`, `AGE`, `PAYROLL`) VALUES (null, ?, ?, ?)";

    $stmt = mysqli_prepare($cn, $sql_qr);
    mysqli_stmt_bind_param($stmt, "sid", $nm, $ag, $py);

    if(mysqli_stmt_execute($stmt)){
        echo "Data Inserted Into empdb Database";
    }else{
        echo "Error occur while inserting!!";
    }
?>