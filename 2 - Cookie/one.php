<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php 
        $a = "";
        $b = "";
        if(isset($_COOKIE['number'])){
            $a = $_COOKIE['number'];
            $b = $_COOKIE['answer'];
        }
    ?>
    <form method="post" action="processperfect.php">
        No. <input type="number" name="number" value="<?=$a?>"> <br>
        <label><?=$b?></label><br>

        <input type="submit" value="Find Prime" name="prime">
        <input type="submit" value="Find Perfect" name="perfect">
        <input type="submit" value="Clear" name="clr">

    </form>
</body>
</html>