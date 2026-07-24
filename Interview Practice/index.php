<?php 
    $x = 10;
    $y = "dhru";
    const PI = 3.14;
    $z = 18.5;

    echo $x;
    echo $y;
    echo PI;
    echo $z . "<br>";


    if (is_int($x)) {
        echo "x is an integer";
    } else {
        echo "x is not an integer";
    }

    echo "<br>";

    switch ($y) {
        case "dhru":
            echo "Hello dhurv";
            break;
        case "john":
            echo "Hello john";
            break;
        default:
            echo "Hello guest";
    }

    echo "<br>";

    for($i=0; $i<5; $i++){
        echo "Value of i: " . $i . "<br>";
    }

    while ($z > 0) {
        echo "Value of z: " . $z . "<br>";
        $z--;
    }


    $arr = array("apple", "banana", "cherry");

    foreach ($arr as $a){
        echo "Value of a: " . $a . "<br>";
    }

    // break; and continue; are used to control the flow of loops in PHP.

    for($i=0; $i<10; $i++){
        if ($i == 5) {
            break; // exit the loop when i is 5
        }
        echo "Value of i: " . $i . "<br>";
    }

    for($i=0; $i<10; $i++){
        if ($i == 5) {
            continue; // skip the rest of the loop when i is 5
        }
        echo "Value of i: " . $i . "<br>";
    }

?>


<?= 
    $K = 5;
    $S = 10;

    function sumofn($a, $b) {
        return $a + $b;
    }       

    sumofn($K, $S);

?>
