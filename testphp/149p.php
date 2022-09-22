<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $height = $_POST['height'];
            $age = $_POST['age'];
            $height = htmlspecialchars($height,ENT_QUOTES,'utf-8');
            $age = htmlspecialchars($age,ENT_QUOTES,'utf-8');

            if (!(($height >= 110) && ($age < 65))){
                echo 'このジェットコースターには乗れません。';
            }
            else {
                echo 'このジェットコースターに乗れます。';
            }
         ?>
         <br><br>
         <input type="button" onclick="history.back()" value="修正">
         <a href="149p.html">戻る</a>
    </body>
</html>
