<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $num = 10;
            $cnt = 0;
            echo $num, '個の●を表示します。<br>';
            while ($cnt < $num){
                echo '●';
                $cnt ++;
            }
        ?>
    </body>
</html>
