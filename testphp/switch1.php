<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $str = $_POST['animal'];
            $str = htmlspecialchars($str,ENT_QUOTES,'utf-8');

            echo $str,'です。<br>',PHP_EOL;
            switch ($str) {
                case '犬' :
                    echo "ワンと鳴きます。";
                    break;
                case '猫'  :
                    echo "ニャーと鳴きます。";
                    break;
                case '牛' :
                    echo "モーと鳴きます。";
                    break;
                case 'にわとり' :
                    echo "cook a doodle dooと泣きます。";
                    break;
                default :
                    echo "どのように啼くのかな？";
            }
         ?>
         <br>
         <a href="switch1.html" autofocus>戻る</a><br>
         <input type="button" onclick="history.back()" value="修正">
    </body>
</html>
