<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>戻り値について</title>
    </head>
    <body>

        <p>PHPのテストです</p>

        <p>
            <?php
                function plus($num1,$num2) {
                    $sum = $num1 + $num2;
                    return $sum;
                }

                $sum = plus(10,8);
                print '10 + 8の結果は'.$sum.'です<br />';

                print '7 + 14の結果は'.plus(7,14).'です';
             ?>
        </p>
    </body>
</html>
