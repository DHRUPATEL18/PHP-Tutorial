<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit DataBase - Admin Only</title>
</head>
<body>
    <?php 
        include "connect.php";

        $id = $_COOKIE["edit_id"];

        $sql_qr = "SELECT * FROM `INFO` WHERE `ID` = $id";
        $db = mysqli_query($cn, $sql_qr);

        $row = mysqli_fetch_array($db);
    ?>
    <form name="f1" action="processedit.php" method="post">
        <input type="hidden" name="id" value="<?= $row["ID"] ?>">
        Name : <input type="text" name="name" value="<?= $row["NAME"] ?>"><br>
        UserID : <input type="text" name="uid" value="<?= $row["UID"] ?>" readonly><br>
        Password : <input type="password" value="<?= $row["PASSWORD"] ?>" name="pass"><br>
        <input type="submit" value="Update" name="Update" />
    </form>
</body>
</html>