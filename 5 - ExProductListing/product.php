<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porduct List</title>
    <script>
        function checkProductId() {
            pid = document.getElementById("pid").value.trim();

            if (pid === "") {
                document.getElementById("msg").innerHTML = "Please enter a Product ID.";
                document.getElementById("pid").focus();
                return false;
            } else {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "productlisting.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        document.getElementById("card").innerHTML = xhr.responseText;
                    } else {
                        document.getElementById("msg").innerHTML = "Error fetching product details.";
                    }
                };
                xhr.send("pid=" + encodeURIComponent(pid));
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <h1>Product List</h1>
        <div class="con">
            <input type="text" name="pid" id="pid" placeholder="Enter Product ID">
            <p id="msg"></p>
            <div id="card"></div>
            <input type="button" name="btn" id="btn" value="Check For Product" onclick="checkProductId()">
        </div>
</body>

</html>