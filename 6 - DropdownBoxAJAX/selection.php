<?php
$cn = mysqli_connect("localhost", "root", "", "state-city");

if (isset($_REQUEST['sid'])) {
    $stid = $_REQUEST["sid"];

    $sql_qr = "SELECT * FROM `city` WHERE `SID`='$stid'";
    $res = mysqli_query($cn, $sql_qr);
    ?>
    <option value="">Select City</option>
    <?php
    while ($row = mysqli_fetch_array($res)) {
        ?>
        <option value="<?= $row['CID'] ?>"><?= $row['CNAME'] ?></option>
        <?php
    }
} else {
    $sql_qr = "SELECT * FROM `state`";
    $res = mysqli_query($cn, $sql_qr);
    ?>
    <option value="">Select State</option>
    <?php
    while ($row = mysqli_fetch_array($res)) {
        ?>
        <option value="<?= $row['SID'] ?>"><?= $row['SNAME'] ?></option>
        <?php
    }
}
?>