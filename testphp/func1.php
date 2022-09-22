<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            function kakeNum($dat1,$dat2){
                $yyy =$dat1 * $dat2;
                return ($yyy);
            }

            $num1 = $_POST('num1');
            $num2 = $_POST('num2');
            $num1 = htmlspecialchars(num1,ENT_QUOTES,'utf-8');
            $num2 = htmlspecialchars(num2,ENT_QUOTES,'utf-8');
            $ans = kakeNum($num1,$num2);
            echo '結果は',$ans,'です。';

         ?>
    </body>
</html>
