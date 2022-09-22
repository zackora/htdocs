<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $num = 10;
            echo $num,'個の●を表示します。<br>';
            for($cnt = 0; $cnt < $num; $cnt ++) {
                echo "●";
            }
         ?>
    </body>
</html>
