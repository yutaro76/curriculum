<?php
    $x = 6.4;
    echo ceil($x);
    echo '<br>';
    echo floor($x);
    echo '<br>';
    echo round($x);
    echo '<br>';
    echo pi();
    echo '<br>';
    echo mt_rand(1,100);
    echo '<br>';
    $str = "hokkaido";
    echo strlen($str);
    echo '<br>';
    echo strpos($str, "o");
    echo '<br>';
    echo substr($str, -2, 2);
    echo '<br>';
    echo str_replace("kk", "KK", $str);
    echo '<br>';
    $str = "たまごやき";
    echo mb_strlen($str);
    echo '<br>';
    $name = "biden";
    $limit_number = 24;
    printf("%sの残り時間はあと%03d時間です", $name, $limit_number);
    echo '<br>';
    echo '<br>';
    echo 'PostgreSQL・Oracle SQL...Relational Databaseの種類';
    echo '<br>';
    echo 'TortoiseGit・TortoiseSVN...TortoiseGitは分散型バージョン管理システムである Git のクライアントで、TortoiseSVNをもとに、 Microsoft Windows シェル拡張 として実装されたもの';
    echo '<br>';
    echo '外部設計・内部設計...システムの仕様・システム内部に特化した詳細な設計';
    echo '<br>';
?>