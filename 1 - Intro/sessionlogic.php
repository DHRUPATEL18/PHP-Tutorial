<?php
    session_start();
    // to get permission to create , update , use or delete the session objects.

    $x = $_REQUEST['num1'];
    $y = $_REQUEST['num2'];  
    
    $_SESSION['num1'] = $x;
    $_SESSION['num2'] = $y;
    if(isset($_REQUEST['addition'])){
        $_SESSION['result'] = "Addition is ".($x+$y);
    }
    elseif(isset($_REQUEST['subtration'])){
        $_SESSION['result'] = "Subtraction is ".($x-$y);
    }
    elseif(isset($_REQUEST['clear'])){
        session_destroy();
    }

    header("Location: sessionmethod.php");
?>
