<?php
    
    $testFile = "test.txt";
    $contents = "こんにちは！";

    if (is_writable($testFile)) {

        $fp = fopen($testFile, "a");

        fwrite($fp, $contents);

        fclose($fp);

        echo "finish writing!!";

    } else {
        
        echo "not writable"; 
        exit;
    
    }

    echo '<br>';
    echo '<br>';

    $test_file = "test2.txt";

    if (is_readable($test_file)) {
        $fp = fopen($test_file, "r");
        while($line = fgets($fp)){
            echo $line.'<br>';
        }
        fclose($fp);
    } else {
        echo "not readable!";
        exit;
    }

echo "CakePHPの2系・3系の違い...Modelクラスがtableとentityの2つに分離された";
echo "<br>";
echo "LAMP...Linux,Apache,MySQL,PHP(perl,python)";
echo "<br>";
echo "AWS...Amazonが提供するクラウドコンピューティングサービス";
echo "<br>";



?>