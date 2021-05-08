<form action="result.php" method="post">

私の名前：<input type="text" name = "my_name" />
<br>
パスワード：<input password="password" name = "password" />
<br>
性別：
    <input type="radio" name="sex" value="男性">男性
    <input type="radio" name="sex" value="女性">女性
<br>
年齢：
    <select name="age">
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
    </select>

<input type="submit" value="送信" /> 

<br>
<br>
<br>
<br>

お名前：<input type="text" name="name" />
<br>
ご希望商品：
        <input type="radio" name="prize" value="A賞">A賞
        <input type="radio" name="prize" value="B賞">B賞
        <input type="radio" name="prize" value="C賞">C賞
<br>
個数：
        <select name="volume">
            <?php for($i=1;$i<=10;$i++){ ?>
                   <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
               <?php } ?>
        
        </select>
<br>
<input type="submit" value="申込" />


</form>


<?php

echo "モジュール...「そいつ単独でも機能としては成立するけど、普通は他のものと組み合わせて使うよ！」な部品のこと";
echo "<br>";
echo "バージョン管理システム...ファイルに対して「誰が」「いつ」「何を変更したか」というような情報を記録することで、過去のある時点の状態を復元したり変更内容の差分を表示できるようにするシステムのこと";
echo "<br>";
echo "サブクエリ...入れ子になったSQL文における中に書いてある方のSQL文";
echo "<br>";


?>


