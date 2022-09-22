<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $rainRt = $_POST['kakuritsu'];
            $rainRt = htmlspecialchars($rainRt,ENT_QUOTES,'utf-8');

            echo '降水確率は',$rainRt,'%です。<br>';

            // if1の問題
            // if ($rainRt >= 40){
            //     echo '傘を持っていきましょう。';
            // }
            // else {
            //     echo '傘を持っていかなくて良いです。';
            // }

            //if2の問題
            if ($rainRt >= 70) {
                // code...
                echo '長い傘を持っていきます。';
            } elseif ($rainRt >= 40) {
                // code...
                echo '折り畳み傘を持っていきます。';
            } else {
                // code...
                echo '傘を持っていきません。';
            }



         ?>
         <a href="if1.html">戻る</a>
         <input type="button" onclick="history.back()" value="修正">
    </body>
</html>
