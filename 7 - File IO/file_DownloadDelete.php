<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Download Delete</title>
</head>

<body>
    <form name="f1" method="post">
        Enter The File Name : <input type="text" name="file"><br>
        <input type="submit" value="Download" name="fdown">
        <input type="submit" value="Delete" name="fdel">
    </form>

    <?php
    $fn = $_REQUEST['file'] ?? '';

    if (isset($_REQUEST['fdown'])) {
        echo "Download Clicked!";
        if (file_exists("Dhru/$fn")) {
            ?>
            <a href="Dhru/<?= $fn ?>" download>Download</a><br>
            <a href="Dhru/<?= $fn ?>">Preview File</a><br>
            <?php
            $imext = [".png", ".jpg", ".jpeg"];
            if (str_contains($fn, ".pdf")) {
                ?>
                <embed src="Dhru/<?= $fn ?>" type="application/pdf" width="100%" height="600px">
                <?php
            } else if (str_contains($fn, in_array($fn, $imext))) {
                ?>
                    <img src="Dhru/<?= $fn ?>" height="300" width="400" />
                <?php
            }
            ?>
            <?php
        } else {
            echo "sorry the file $fn does'nt exists!";
        }
    } elseif (isset($_REQUEST['fdel'])) {
        echo "Delete Clicked!";
        if (file_exists("Dhru/$fn")) {
            unlink("Dhru/$fn");
            echo "File deleted successfully!";
        } else {
            echo "sorry the file $fn does'nt exists!";
        }
    }
    ?>
</body>

</html>