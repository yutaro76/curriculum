<?php

$fruits = ["りんご","みかん","もも"];

foreach ($fruits as $value) {
    echo $value;
}

echo '<br>';

$fruits = ["apple" => "りんご", "orange" => "みかん", "peach" => "もも"];

foreach($fruits as $key => $value) {
    echo $key;
    echo '<br>';
    echo $value;
    echo '<br>';
}

$fruits = ["apple" => "りんご", "orange" => "みかん", "peach" => "もも"];

foreach($fruits as $key => $value) {
    
    echo "{$key}といったら{$value}";
    echo "<br>";

}

echo "トランザクション...複数の処理を1つにまとめたもの";
echo "<br>";
echo "排他ロック...データベースシステムなどで記憶領域への同時アクセスを制限するロック機構の一つで、他の実行主体によるアクセスを完全に禁止するもの";
echo "<br>";
echo "チューニング...処理時間の短縮や負荷の軽減を見込んで、良い感じになるようにあれやこれやと調整すること";
echo "<br>";

?>