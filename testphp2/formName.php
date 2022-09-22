<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $name = $_POST['name'];
            $name = htmlspecialchars($name, ENT_QUOTES, 'utf-8');
            echo $name.'さん、こんにちは！';
         ?>
    </body>
</html>
