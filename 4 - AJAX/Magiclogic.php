<?php 
    $n = $_REQUEST['num'];
    $sum = 0;

    while($n!=0){
        $r = $n%10;
        $n = Intval($n/10);
        $sum+=$r;        
        
        if($sum>9 && $n==0){
            $n = $sum;
            $sum = 0;
        }
    }    
    
    if($sum==1){
        $ans = "Magic Number";
    } 
    else {
        $ans = "Not a Magic Number";
    }
    echo "Ans: " . $ans;
?>