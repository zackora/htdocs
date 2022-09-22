<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $year = 2012;
            if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))) {
                echo "うるう年です。";
            }
            else {
                echo "うるう年ではありません。";
            }
         ?>
    </body>
</html>
