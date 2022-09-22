<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            function hyoji($name){
                // echo '名前を表示しました。';

                return $name.'と表示しました。';
            }
            $ret = hyoji('
            <input type="text" name="name" value="">

            ');
            $ret = htmlspecialchars($ret, ENT_QUOTES, 'utf-8');
            echo $ret;
         ?>
    </body>
</html>
