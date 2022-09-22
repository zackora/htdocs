<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $waist = $_POST['koshi'];
            $height = $_POST['shintyou'];

            // echo '<pre>';
            // print_r($waist);
            // print_r($height);
            // echo '</pre>';

            $rate = $waist / $height;
            echo "あなたの隠れ肥満度は、",$rate,'です。',PHP_EOL;

         ?>
         <a href="keisan1.html">戻る</a>
         <input type="button" onclick="history.back()" value="修正">
    </body>
</html>
