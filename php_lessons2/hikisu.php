<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p>phpのテスト</p>
        <form class="" action="" method="post">
            <input type="text" name="suu1" value="" placeholder="数値を入力" size="10"><br>
            <input type="text" name="suu2" value="" placeholder="数値を入力" size="10"><br>
            <input type="submit" name="" value="計算">
        </form>

        <?php
            function heikin($num1, $num2){
                $result = ($num1 + $num2) / 2;
                print($num1 . "と、" . $num2 . 'の平均は' . $result . "です。<br>");
            }

            $suu1 = $_POST['suu1'];
            $suu1 = htmlspecialchars($suu1, ENT_QUOTES, 'utf-8');
            $suu2 = $_POST['suu2'];
            $suu2 = htmlspecialchars($suu2, ENT_QUOTES, 'utf-8');

            if ($suu1 == ''||$suu2 == ''){
                $suu1 = 0;
                $suu2 = 0;
            }

            heikin($suu1, $suu2);
            heikin(23245376, 46468);
         ?>
    </body>
</html>
