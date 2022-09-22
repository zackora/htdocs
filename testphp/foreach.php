<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $days = array('morning'   => '朝',
                          'afternoon' => '昼',
                          'evening'   => '夕方' );

            foreach($days as $key => $value){
                echo 'Good ',$key,'!',$value,'になりました。<br>';
            }
         ?>
    </body>
</html>
