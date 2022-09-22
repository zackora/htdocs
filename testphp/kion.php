<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $kion = $_POST['kion'];
            $kion = htmlspecialchars($kion,ENT_QUOTES,'utf-8');
            // if ($kion >= 25) {
            //     // code...
            //     if ($kion >= 30) {
            //         // code...
            //         if ($kion >=35 {
            //             // coう 40) {
            //        code...
            //                 echo "どえらい";
            //
            //             echo             //         }
            //         echo "すごく";
            //     }
            //     echo "暑い！！！！";
            // } else {
            //     // code...
            //     echo "暑くない";
            // }
            switch ($kion) {
                case $kion >= 35 :
                    echo "もう";
                case $kion >= 30 :
                    echo "めっちゃ";
                case $kion >= 25 :
                    echo "暑い";
                    break;
                case $kion = 0 :
                    echo 'さっむ';
                    break;

                default :
                    echo "ぼちぼち";
            }



         ?>
         <br>
         <a href="kion.html" autofocus>戻る</a><br>
         <input type="button" onclick="history.back()" value="修正">

    </body>
</html>
