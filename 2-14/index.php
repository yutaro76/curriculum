<?php

$members = ["tim", "cat", "dice", "sam", "nora"];
echo count($members);
echo "<br>";
sort($members);
var_dump($members);
echo "<br>";
var_dump(in_array("tim", $members));
echo "<br>";
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";
$string = explode("@", $atstr);
var_dump ($string);
echo "<br>";
$atstr = implode($members);
var_dump($atstr);
echo "<br>";
echo "<br>";
$numbers = [26, 35, 17, 67, 45];
sort($numbers);
var_dump($numbers);
echo "<br>";
echo "<br>";
echo "<br>";
$numbers = "1, 2, 3, 4, 5";
$atstr = explode(",", $numbers);
var_dump($atstr);
echo "<br>";
echo "<br>";
echo "要件定義(要求仕様書)...エンドユーザーが開発担当側に対して開発を依頼するシステム要件を文章化したもの";
echo "<br>";
echo "単体テスト・結合テスト...単体・単体と単体をつなげるテスト・すべてのシステムをまとめたのが総合テスト";
echo "<br>";
echo "テスト仕様書(どのようなもの、項目)...環境・内容・手順・結果・通し番号・年月日・担当者";

?>