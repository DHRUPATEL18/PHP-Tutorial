<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploader</title>
</head>
<body>
    <form name="f1" method="post" action="processfiles.php" enctype="multipart/form-data">
        Select Profile pic : <input type="file" name="f[]" multiple><br>
        <input type="submit" value="Upload" name="upldbtn">
    </form>
    </form>
</body>
</html>