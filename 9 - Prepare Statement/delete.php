<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg Page</title>
</head>
<body>
    <form name="f1" method="post">
        Name : <input type="text" name="name" required><br>
        <input type="submit" name="delete" value="delete">
    </form>

    <?php 
        $cn = mysqli_connect("localhost", "root", "", "empdb");

        $nm = $_REQUEST['name'] ?? '';

        $sql_qr = "DELETE FROM `emp_info` WHERE `NAME`=?";


        $stmt = mysqli_prepare($cn, $sql_qr);
        mysqli_stmt_bind_param($stmt, "s", $nm);
        mysqli_stmt_execute($stmt);
        
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "Data Row Deleted Into empdb Database";
        } else {
            echo "No record found with that name.";
        }

    ?>
</body>
</html>