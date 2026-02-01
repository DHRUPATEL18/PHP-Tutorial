<?php
    $x = $_REQUEST['num1'];
    $s = 1 ;
    for($i =  $x; $i > 0; $i--){
        $s = $s * $i;
    }
    echo "Result of Fectorial, $x! = $s";
?>
