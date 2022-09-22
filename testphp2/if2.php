<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="" method="post">
            <?php
            echo '降水確率は','<input type="text" name="name" value="">', '%です。<input type="submit" name="" value="判定"><br>';

            $rainRt = $_POST['name'];
            $rainRt = htmlspecialchars($rainRt,ENT_QUOTES,'utf-8');
            if($rainRt >= 75){
                echo '長い傘を持っていきます。';
            }elseif ($rainRt >= 70) {
                echo '折りたたみ傘を持っていきます。';
            }elseif($rainRt == ''){
                echo "";
            }
            else{
                echo '傘を持っていきません。';
            }
            ?>
        </form>
    </body>
</html>
