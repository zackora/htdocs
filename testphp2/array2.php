<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $bstone = array(
                'ガーネット', 'アメシスト', 'アクアマリン',
                'ダイヤモンド', 'エメラルド', 'パール',
                'ルビー', 'ペリドット', 'サファイア',
                'オパール', 'トパーズ', 'ターコイズ'
            );
            $birth = 3;
            echo '私は、'. $birth . '月生まれです。<br>';
            echo '誕生石は、'. $bstone[$birth - 1]. 'です。<br>';
            echo '<pre>';
            $cnt = count($bstone);
            print($cnt);
            echo '</pre>';
         ?>
    </body>
</html>
