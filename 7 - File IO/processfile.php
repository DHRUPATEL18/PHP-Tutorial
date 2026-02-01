<?php

    $fn = $_FILES['f']['name'];
    $fz = $_FILES['f']['size'];
    $ft = $_FILES['f']['type'];
    $tfn = $_FILES['f']['tmp_name'];

    if(file_exists("Dhru/$fn")){
        echo "Sorry, File is already exsisted";
    }
    else{
        if(move_uploaded_file($tfn, "Dhru/$fn")){
            echo "$fn upload successfully";
        }
        else{
            echo "There is issue while uploding! Try After some time";
        }
    }
?>