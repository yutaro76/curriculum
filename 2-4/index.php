<?php
$age = 18;

if ($age >= 20) {
    echo "drinkable";
} else {
    echo "undrinkable";
}

echo '<br>';

$age = 24;
$is_student = false;

if ($age < 25 && $is_student) {
    echo "discount";
} elseif ($age < 25) {
    echo "partial discount";
}

echo '<br>';

//チャレンジ

$name = 'jiro';
$pass = 'pasta';

if ($name == 'taro' && $pass == 'pass') {
    echo 'successful';
} elseif ($name == 'taro') {
    echo 'password wrong';
} elseif ($pass == 'pass') {
    echo 'name wrong';
} else {
    echo 'information error';
}

echo '<br>';

echo "IDE（統合開発環境）...ソフトウェアの開発で利用されるこれらのソフトウェアを、その他の支援ツールなどとまとめてしまい、一つの開発環境で統合・統一的に扱えるようにした開発環境";
echo '<br>';
echo "JOIN（データベースにおいて）...複数のテーブルを特定のキーを使って結びつけること";
echo '<br>';
echo "コンフリクト...複数の装置やプログラムなどが同じ資源を同時に利用しようとして競合状態になってしまうこと";
echo '<br>';

?>