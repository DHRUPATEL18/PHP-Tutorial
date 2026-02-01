<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestDB</title>
    <script src="checker.js"></script>
    <script>
        function validation_f1(f1) {
            with(f1) {
                if (!validation_pass(pass, cpass)) {
                    return false;
                } else if (!validation_name_uid(name, uid)) {
                    return false;
                }
                return true;
            }
        }
    </script>
</head>

<body>
    <form name="f1" action="processreg.php" method="post" onsubmit="return validation_f1(this);">
        <h1>Registration Form</h1>
        Name : <input type="text" name="name" required><br>
        UserID : <input type="text" name="uid" onblur="checkuid(this)" required><br>
        Password : <input type="password" name="pass" required><br>
        Confirm Password : <input type="password" name="cpass" required><br>
        <p id="note"></p>
        <input type="submit" value="Register" name="save" />
    </form>
</body>

</html>