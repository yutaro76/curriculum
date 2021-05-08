<form action="result.php" method="post">
  名前：<input type="text" name="my_name" />
  <br>
  メールアドレス：<input type="text" name="email" />
  <br>
  パスワード：<input type="password" name="password" />
  <br>
  <input type="submit" value="送信" />
</form>


<?php

echo "仕様書・設計書...仕様書には結果（目標、ゴール）を記述し、設計書には過程（プロセス、仕組み）を記述する";
echo "<br>";
echo "Git...プログラムのソースコードなどの変更履歴を記録・追跡するための分散型バージョン管理システム";
echo "<br>";
echo "マージツール...複数のファイルやデータ、プログラムなどを、決められたルールに従って一つに統合すること";
echo "<br>";

?>