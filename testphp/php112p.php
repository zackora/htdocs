<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $namae = $_POST['name'];
            $namae = htmlspecialchars($namae,ENT_QUOTES,'utf-8');
            echo $namae,"さん、こんにちは！";
         ?>
    </body>
</html>
