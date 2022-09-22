<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $f1 = $_POST['food'][0];
            $f2 = $_POST['food'][1];
            $f1 = htmlspecialchars($f1,ENT_QUOTES,'UTF-8');
            $f2 = htmlspecialchars($f2,ENT_QUOTES,'UTF-8');

            echo '<pre>';
            print_r($_POST);
            echo '</pre>';

            echo "あなたは「",$f1,'」が好きなんですね。<br>',PHP_EOL;
            echo "「",$f2,'」も好きなんですね。<br>',PHP_EOL;
         ?>
    </body>
</html>
