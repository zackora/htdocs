<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $hensu = 3;
            echo "変数の値は",$hensu,'です。<br><br>',PHP_EOL;
            
            echo 'インクリメントします。<br>',PHP_EOL;
            $hensu ++;
            echo $hensu,'になりました。<br><br>',PHP_EOL;

            echo 'デクリメントします。<br>',PHP_EOL;
            $hensu --;
            echo $hensu,'になりました。<br>',PHP_EOL;
         ?>
    </body>
</html>
