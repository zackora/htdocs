<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

            $price = array ('apple' => 230,
                            'melon' => 560,
                            'banana' => 150);

            foreach ($price as $key => $value) {
                echo $key,'は',$value,'円です。<br>';
            }

            // $arr = array('カレー','ハンバーグ','オムライス');
            //
            // echo '<pre>';
            // print_r($arr);
            // echo '</pre>';
            //
            //
            // foreach($arr as $value) {
            //     echo $value,'が好き。<br>';
            // }
         ?>
    </body>
</html>
