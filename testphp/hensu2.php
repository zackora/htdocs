<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            // $var = 3;
            // echo "[整数型] ",$var,"<br>",PHP_EOL;
            //
            // $var = 23.456;
            // echo "[浮動小数型] ",$var,"<br>",PHP_EOL;
            //
            // $var = "あいうえお";
            // echo "[文字列型] ",$var,"<br>",PHP_EOL;
            //
            // $var = 123.456;
            // echo '$varは、 ',$var,"<br>";
            // echo '$varは、 ',(int)$var,"<br>";
            // echo '$varは、 ',$var,"<br>";

            // echo "ただいま\\外出中\\です。";

            // $no = 3;
            // echo "私は、$no 階に住んでいます。";

            $name = 'ラーメン';
            $str = <<<EOD
            お昼になりました。<br>
            $name を食べに行きましょう。
            EOD;

            echo $str;
         ?>
    </body>
</html>
