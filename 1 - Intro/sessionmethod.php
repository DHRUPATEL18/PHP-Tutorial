<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro</title>
</head>
<body>
    <?php
        session_start();

        $x = "";
        $y = "";
        $z = "";

        if (isset($_SESSION['num1']) && isset($_SESSION['num2']) && isset($_SESSION['result'])) {
            // Check if session variables are set
            $x = $_SESSION['num1'];
            $y = $_SESSION['num2'];
            $z = $_SESSION['result'];
        }
    ?>


    <form name="form" method="post" action="sessionlogic.php">
        No 1 :
        <input type="number" name="num1" value="<?php echo $x?>" min="0" max="100"><br>
        No 2 :
        <input type="number" name="num2" value="<?php echo $y?>" min="0" max="100" style="margin-top: 5px;"><br>
        Result :
        <input type="text" name="result" value="<?php echo $z; ?>" readonly style="margin-top: 5px;"><br>
        <input type="submit" value="Add" name="addition" style="margin-top: 10px; width: 100px;">
        <input type="submit" value="sub" name="subtration" style="margin-top: 10px; width: 100px;">
        <input type="submit" value="clr" name="clear" style="margin-top: 10px; width: 100px;">
    </form>
</body>
</html>