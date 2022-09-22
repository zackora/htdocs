<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            // echo "始まり<br>";
            // echo __line__,'行目です<br>';
            // echo "途中<br>";
            // echo __line__,'行目です<br>';
            // echo "終わり<br>";

            $you = '曜日';
            $week = array('月','火','水');
            echo $week[0],$you;
            echo "<pre>";
            print_r($week);
            echo "</pre>";
         ?>
    </body>
</html>
