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
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = isset($_POST['my_name']) ? $_POST['my_name'] : "";
//①画像を参考に問題文の選択肢の配列を作成してください。
$network = ["80", "22", "20", "21"];
$language = ["PHP", "Python", "JAVA", "HTML"];
$command = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$ok_network = $network[0]; 
$ok_language = $language[3];
$ok_command = $command[1];

?>

<p>お疲れ様です<?php echo $my_name; ?>さん</p>

<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="POST">

<input type="hidden" name="my_name" value="<?php echo $my_name; ?>">

<h2>①ネットワークのポート番号は何番？</h2>

<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<?php $network = ["80", "22", "20", "21"];
    
    foreach($network as $netvalue): ?>

    <input type="radio" name="network" value="<?php echo $netvalue; ?>"><?php echo $netvalue; ?>

<?php endforeach; ?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<?php $language = ["PHP", "Python", "JAVA", "HTML"];
    
    foreach($language as $langvalue): ?>

    <input type="radio" name="language" value="<?php echo $langvalue; ?>"><?php echo $langvalue; ?>

<?php endforeach; ?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<?php $command = ["join", "select", "insert", "update"];
    
    foreach($command as $comvalue): ?>

    <input type="radio" name="command" value="<?php echo $comvalue; ?>"><?php echo $comvalue; ?>

<?php endforeach; ?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->

<?php echo "<br>"?>

<input type="submit" value="回答する">

</form>

</body>
</html>