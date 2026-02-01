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
        Age : <input type="text" name="age" required><br>
        PayRoll : <input type="text" name="payroll" required><br>
        <input type="submit" name="update" value="update">
    </form>

    <?php 
        $cn = mysqli_connect("localhost", "root", "", "empdb");

        $nm = $_REQUEST['name'] ?? '';
        $ag = $_REQUEST['age'] ?? '';
        $py = $_REQUEST['payroll'] ?? '';

        $sql_qr = "UPDATE `emp_info` SET `AGE`=?, `PAYROLL`=? WHERE `NAME`=?";


        $stmt = mysqli_prepare($cn, $sql_qr);
        mysqli_stmt_bind_param($stmt, "ids", $ag, $py, $nm);
        mysqli_stmt_execute($stmt);
        
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "Data Updated Into empdb Database";
        } else {
            echo "No record found with that name.";
        }

    ?>
</body>
</html>