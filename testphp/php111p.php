<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            // $bl = $_POST;
            // $bl['btype'] = array('不明','A','B','O','AB' );


            $bl = $_POST['btype'];
            $bl = htmlspecialchars($bl,ENT_QUOTES,'utf-8');
            echo "あなたが選んだ血液型は",$bl,'型です。';
        ?>
    </body>
</html>
