<?php
$n = $_POST['number'];

if (isset($_REQUEST['perfect'])) {
    for ($i = 1; $i < $n; $i++) {
        if ($i % 2 == 0) {
            $sum = 0;
            $sum += $i;
        }
    }

    if ($sum == $n) {
        $ans = "The $n is a perfect Number!";
    } else {
        $ans = "The $n is not a perfect Number!";
    }

    setcookie("number", $n, time()+3600);
    setcookie("answer", $ans, time()+3600);
}
elseif (isset($_REQUEST['prime'])){
    $isprime = false;

    for($i=2; $i<$n; $i++){
        if($n % $i == 0){
            $isprime = true;
        }
        else {
            $isprime = true;
        }
    }

    if ($isprime) {
        $ans = "The $n is not a prime Number!";
    } else {
        $ans = "The $n is a prime Number!";
    }

    setcookie("number", $n, time()+3600);
    setcookie("answer", $ans, time()+3600);
}
else {
    setcookie("number", $n, time()-3600);
    setcookie("answer", $ans, time()-3600);
}

header("Location: one.php");