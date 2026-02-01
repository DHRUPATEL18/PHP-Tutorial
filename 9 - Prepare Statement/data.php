<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestDB - Data</title>
</head>

<body>
    <?php
    $cn = mysqli_connect("localhost", "root", "", "empdb");

    $sql_qr = "SELECT * FROM `emp_info`";
    $db = mysqli_prepare($cn, $sql_qr);
    mysqli_stmt_execute($db);

    $res = mysqli_stmt_get_result($db);
    ?>
    <center>
        <H1>Data form empdb</H1>
        <table align="center" border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>AGE</th>
                <th>PAYROLL</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($res)) {
            ?>
                <tr>
                    <td><?= $row["ID"] ?></td>
                    <td><?= $row["NAME"] ?></td>
                    <td><?= $row["AGE"] ?></td>
                    <td><?= $row["PAYROLL"] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>