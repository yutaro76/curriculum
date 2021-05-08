<?php

$i = 1;
while($i <= 100) {

if ($i % 3 == 0 && $i % 5 != 0) {
    echo "Fizz!";
    echo "<br>";
} elseif ($i % 3 != 0 && $i % 5 == 0) {
    echo "Buzz!";
    echo "<br>";
} elseif ($i % 3 == 0 && $i % 5 == 0) {
    echo "FizzBuzz!";
    echo "<br>";
} else {
    echo "$i";
    echo "<br>";
}

$i++;

}

echo "<br>";

for($i=1;$i<=100;$i++) {

    if ($i % 3 == 0 && $i % 5 != 0) {
        echo "Fizz!";
        echo "<br>";
    } elseif ($i % 3 != 0 && $i % 5 == 0) {
        echo "Buzz!";
        echo "<br>";
    } elseif ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz!";
        echo "<br>";
    } else {
        echo "$i";
        echo "<br>";
    }

}

echo "パフォーマンス...コンピュータなどの機器やソフトウェア、システムなどの処理性能や実行速度、通信回線・ネットワークなどの伝送速度・容量などのこと";
echo "<br>";
echo "スロークエリ...データベース管理システム(DBMS)に対する問い合わせ(クエリ)のうち、一定の基準に照らして遅い、時間がかかっているもの。";
echo "<br>";
echo "クエリログ...クライアントからの MySQL Server への接続・接続解除の情報、およびクライアントから実行された全ての SQL クエリを出力してくれるログ";
echo "<br>";

?>