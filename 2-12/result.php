<?php

$my_name = $_POST['my_name'];
$password = $_POST['password'];
$sex = $_POST['sex'];
$age = $_POST['age'];

?>

<p>私の名前は<?php echo $my_name; ?>です。</p>
<p>パスワードは<?php echo $password; ?>です。</p>
<p>性別は<?php echo $sex; ?>です。</p>
<p>年齢は<?php echo $age; ?>歳です。</p>


<?php

$name = $_POST['name'];
$prize = $_POST['prize'];
$volume = $_POST['volume'];

?>

<p>お名前：<?php echo $name; ?></p>
<p>ご希望景品<?php echo $prize; ?></p>
<p>個数：<?php echo $volume; ?></p>