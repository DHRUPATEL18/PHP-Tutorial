<?php 
    include "connect.php"; // Include the connection script to connect to the database

    // Collect Data form registration form
    // Using POST method to retrieve data
    $nm = $_POST['name'];
    $uid = $_POST['uid'];
    $pass = $_POST['pass'];

    // Prepare the SQL query to insert the data into the 'info' table
    echo $sql_qr = "INSERT INTO `info`(`NAME`, `UID`, `PASSWORD`) VALUES ('$nm','$uid','$pass')";

    mysqli_query($cn,$sql_qr);

    $raf = mysqli_affected_rows($cn);
    if($raf>0){
        setcookie("msg", "Registration Successfully! -> Welcome to Page", time() + 3600);
        header("Location: welcome.php");
    }
    else{
        setcookie("msg", "There is Isuue in Registration!", time() + 3600);
        header("Location: reg.php");
    }
?>