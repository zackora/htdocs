<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $ninzu = $_POST['ninzu'];
            $yosan = $_POST['yosan'];
            $ninzu = htmlspecialchars($ninzu,ENT_QUOTES,'utf-8');
            $yosan = htmlspecialchars($yosan,ENT_QUOTES,'utf-8');

            echo '人数は',$ninzu,'人です。<br>';
            echo '1人あたりの予算は',$yosan,'円です。<br>';

            if (($ninzu >= 4) && ($ninzu <= 17) && ($yosan >= 3500)){
                echo 'グループメニューを注文できます。';
            }
            else {
                echo 'グループメニューは注文できません。';
            }
         ?>
         <input type="button" onclick="history.back()" value="修正">
         <a href="if3.html">戻る</a>
    </body>
</html>
