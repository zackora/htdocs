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
                case 'イルカ' :
                case 'クジラ' :
                case '人間' :
                    echo "哺乳類です。";
                    break;
                case 'クロマグロ' :
                case 'カツオ' :
                    echo "魚類です。";
                    break;
                default :
                    echo "何類なんだ・・・？";

            }
         ?>
    </body>
</html>
