<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $arr1[] = '123';
            $arr1[] = '季節';
            $arr1[] = 456.789;

            $arr2['spring'] = '春';
            $arr2['summer'] = '夏';
            $arr2['autumn'] = '秋';
            $arr2['winter'] = '冬';

            echo $arr1[0],'<br>';
            echo $arr1[1],'<br>';
            echo $arr1[2],'<br>';

            echo '<br>',PHP_EOL;

            echo $arr2['spring'],'<br>';
            echo $arr2['summer'],'<br>';
            echo $arr2['autumn'],'<br>';
            echo $arr2['winter'],'<br>';

         ?>
    </body>
</html>
