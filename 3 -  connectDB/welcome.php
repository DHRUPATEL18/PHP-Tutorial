<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <?php 
        $a = "";
        if(isset($_COOKIE['msg'])){
            $a = $_COOKIE['msg'];
        }
    ?>
    <h1>Welcome to the New Page!</h1>
    <p><?php echo $a; ?></p>
</body>
</html>