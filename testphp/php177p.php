<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            for ($cnt = 1;$cnt <= 10;$cnt ++){
                echo '繰り返し',$cnt,'回目です。<br>';
                if($cnt == 5){
                    break;
                }
            }

         ?>
    </body>
</html>
