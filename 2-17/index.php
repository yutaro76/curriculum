<?php

$i = 0;
$n = 1;

while(true){

    $dice = mt_rand(1, 6);
    
    $i = $i + $dice;
    
    $en = $n."回目=".$dice;

    if($i<40) {
        echo $en;
        echo "<br>";
        $n++;
    } else {
        echo $en;
        echo "<br>";
        break;
    }

}

echo "合計".$n."回でゴールしました";

echo "<br>";
echo "<br>";
echo "<br>";

date_default_timezone_set('Asia/Tokyo');
$h = date("H", time());

echo "今".$h."時台です";
echo "<br>";

if(0<=$h && $h<12) {
    echo "おはようございます";
} elseif(12<=$h && $h<18) {
    echo "こんにちは";
} else {
    echo "こんばんは";
}

?>