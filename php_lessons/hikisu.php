<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>引数について</title>
    </head>
    <body>

        <p>PHPのテストです。</p>

        <p>
            <?php
                function heikin($num1,$num2) {
                    $result = ($num1 + $num2) / 2
                    print $num1."と".$num2."の平均は".$result."です。<br>";
                }

                heikin(10,8);
                heikin(3,23);
             ?>
        </p>
    </body>
</html>
