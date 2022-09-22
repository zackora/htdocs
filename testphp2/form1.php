<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $f1 = $_POST['food1'];
            $f2 = $_POST['food2'];
            $f1 = htmlspecialchars($f1, ENT_QUOTES, 'utf-8');
            $f2 = htmlspecialchars($f2, ENT_QUOTES, 'utf-8');
            echo 'あなたは「', $f1, '」が好きなんですね。<br>', PHP_EOL;
            echo '「', $f2, '」も好きなんですね。<br>', PHP_EOL;
         ?>
    </body>
</html>
