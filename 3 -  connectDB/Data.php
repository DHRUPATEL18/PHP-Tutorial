<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestDB - Data</title>
    <script>
        function delet_Db(id) {
            if (confirm(`Are you sure you want to delete ${id} record?`)) {
                document.cookie = "del_id="+id;
                window.location = "Data.php";
            }
        }

        function edit_Db(id) {
            document.cookie = "edit_id="+id;
            window.location = "Edit.php";
        }
    </script>
</head>

<body>
    <?php
    include "connect.php"; // Include the connection script to connect to the database

    if (isset($_COOKIE["del_id"])) {
        $del_id = $_COOKIE["del_id"];

        $sql_del = "DELETE FROM `info` WHERE `ID` = '$del_id'";
        mysqli_query($cn, $sql_del);
        setcookie("del_id", "", time() - 3600);
    }
    elseif(isset($_REQUEST["m"])){
        $msg=$_REQUEST["m"];
    }

    $sql_qr = "SELECT * FROM `info`";
    $db = mysqli_query($cn, $sql_qr);
    ?>
    <center>
        <H1>Data form TestDB</H1>
        <table align="center" border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>UID</th>
                <th>Action</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($db)) {
            ?>
                <tr>
                    <td><?= $row["ID"] ?></td>
                    <td><?= $row["NAME"] ?></td>
                    <td><?= $row["UID"] ?></td>
                    <td>
                    <a href="javascript:edit_Db(<?= $row["ID"] ?>)">Edit</a> 
                    <a href="javascript:delet_Db(<?= $row["ID"] ?>)">Delete</a> 
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>