<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            for($cnt = 1; $cnt <= 10; $cnt ++){
                echo "繰り返し",$cnt,'回目です。';
                if ($cnt % 2) {
                    // code...
                    echo '<br>',PHP_EOL;
                    continue;
                }
                echo '偶数です。<br>',PHP_EOL;
            }
         ?>
    </body>
</html>
