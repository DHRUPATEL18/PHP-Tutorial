<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State-city Dropdwon Box</title>
</head>

<body>
    <form name="f1" method="post">
        State : <select name="state" id="state" onchange="fillcity(this.value)">
            <option value="">Select State</option>
        </select><br>
        City : <select name="city" id="city">
            <option value="">Select City</option>
        </select>
    </form>
    <script>
        function fillstate() {
            const xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status == 200) {
                    document.getElementById("state").innerHTML = xhr.responseText;
                } else {
                    console.error("Error loading states:", xhr.status);
                }
            };
            xhr.open("GET", "selection.php", true);
            xhr.send();
        }

        fillstate();

        function fillcity(sid) {
            const xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status == 200) {
                    document.getElementById("city").innerHTML = xhr.responseText;
                } else {
                    console.error("Error loading cities:", xhr.status);
                }
            };
            xhr.open("GET", "selection.php?sid="+ sid, true);
            xhr.send();
        }
    </script>
</body>

</html>