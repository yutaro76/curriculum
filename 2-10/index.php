<?php

    function getCuboidVolume($width, $length, $height) {

        $volume = $width * $length * $height;
        echo "直方体の体積は".$volume."だよ。";

    }

    getCuboidVolume(5, 10, 8);

echo "<br>";

echo "
ハッシュ化...元の値を「ハッシュ関数」と呼ばれる「値を中に放り込むと適当な値（適当に見える値）を返してくれる関数」に入れて「ハッシュ値」と呼ばれる「適当な値（適当に見える値）」に変換すること
<br>
総合テスト...構築したシステムが全体で予定通りの機能を満たしているか、また機能や性能が仕様書通りに構築できているかを検証すること
<br>
デバッグ...コンピュータプログラムや電気機器中のバグ・欠陥を発見および修正し、動作を仕様通りのものとするための作業
"


?>