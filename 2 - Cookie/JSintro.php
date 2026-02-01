<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS1</title>
    <script>
        function checkBlank(c, msg) {
            data = c.value;
            if (data == "") {
                alert(msg);
                c.focus();
                return false;
            }
            return true;
        }

        function checkAge(c, msg) {
            data = c.value;

            
            if (isNaN(data)) {
                alert(msg);
                c.focus();
                return false;
            }
            n = Number(data);
            if (n <= 0) {
                alert(msg);
                c1.value = "";
                c1.focus();
                return false;
            }
            return true;

        }

        function validateForm(form) {
            with(form) {
                if (!checkBlank(Fname, "Name Field can not be left blank!")) {
                    return false;
                } else if (!checkBlank(Lname, "Last name Field can not be left blank!")) {
                    return false;
                } else if (!checkAge(Age, "Please enter proper age!")) {
                    return false;
                }
            }
        }
    </script>
</head>

<body>
    <form name="frm" method="post" action="processform.php">
        First Name <input type="text" name="Fname"><br>
        Last Name <input type="text" name="Lname"><br>
        Age <input type="text" name="Age"><br>

        <input type="submit" value="Check Validation" name="Submit" onclick="return validateForm(frm)">

    </form>
</body>

</html>