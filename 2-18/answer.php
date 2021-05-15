<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

$my_name = isset($_POST['my_name']) ? $_POST['my_name'] : "";

$annetwork = isset($_POST['network']) ? $_POST['network'] : "";
$anlanguage = isset($_POST['language']) ? $_POST['language'] : "";
$ancommand = isset($_POST['command']) ? $_POST['command'] : "";

$network = ["80", "22", "20", "21"];
$language = ["PHP", "Python", "JAVA", "HTML"];
$command = ["join", "select", "insert", "update"];

$ok_network = $network[0]; 
$ok_language = $language[3];
$ok_command = $command[1];

?>

<!-- 選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する -->

<?php

function getJudgement($chosen,$correct){
    if($chosen==$correct){
        echo "正解!";
    } else {
        echo "残念・・・";
    }
}

?>

<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->

<?php
getJudgement($annetwork,$ok_network);
?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->

<?php
getJudgement($anlanguage,$ok_language);
?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->

<?php
getJudgement($ancommand,$ok_command);
?>

</body>
</html>