<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <form name="f1" method="post" action="processfile.php" enctype="multipart/form-data">
        Select Profile pic : <input type="file" name="f"><br>
        <input type="submit" value="Upload" name="upldbtn">
    </form>
</body>
</html>