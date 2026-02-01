<?php 
    $fn = $_FILES['f']['name'];
    
    foreach ($fn as $key => $fnm) {
        $src = $_FILES['f']['tmp_name'][$key];

        if (file_exists("Uploads/$fnm")) {
            echo "Sorry, file '$fnm' already exists.<br>";
        } else {
            if (move_uploaded_file($src, "Uploads/$fnm")) {
                echo "$fnm uploaded successfully.<br>";
            } else {
                echo "There was an issue uploading $fnm. Try again later";
            }
        }
    }
?>
