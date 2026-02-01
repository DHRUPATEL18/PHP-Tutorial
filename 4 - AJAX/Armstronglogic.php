<?php 
    $n = $_REQUEST['num'];
    $OriginalNumber = $n;
    $sum = 0;

    $pw = strlen((string)$OriginalNumber);

    while ($n > 0) {
        $r = $n%10;
        $sum+=pow($r, $pw);
        $n = Intval($n/10);
    }

    if ($sum == $OriginalNumber) {
        $ans = "Armstrong Number";
    } else {
        $ans = "Not an Armstrong Number";
    }

    echo "Ans: " . $ans;

?>