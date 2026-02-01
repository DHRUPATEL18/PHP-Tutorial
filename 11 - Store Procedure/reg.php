<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form name="f1" method="post" action="processInsert.php">
        Name : <input type="text" name="name" required><br>
        UID : <input type="text" name="uid" required><br>
        ROLE : <input type="text" name="role" required><br>
        IGNAME : <input type="text" name="igname" required><br>
        <input type="submit" name="insert" value="insert">
    </form>
</body>
</html>