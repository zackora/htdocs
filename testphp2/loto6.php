<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            echo '以下の6個の数字を選び出しました。<br><br>';

            $numArr = array();

            for($cnt = 0;$cnt < 6;$cnt++){
                $num = mt_rand(1, 43);

                for(;;){
                    if(in_array($num, $numArr)){
                        $num = mt_rand(1, 43);
                    }
                    else{
                        break;
                    }
                }
                $numArr[] = $num;
            }

            sort($numArr);

            foreach($numArr as $num){
                echo $num, '<br>', PHP_EOL;
            }

         ?>
    </body>
</html>
