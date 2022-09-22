<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <!-- お名前：xxx
        電話番号：xxx
        予約日時：xxx
        希望席：
        当店をお知りになったきっかけ： -->
        <?php
        echo "<pre>";
        print_r ($_POST);
        echo "</pre>";
        $namae = $_POST['namae'];
        $namae = htmlspecialchars($namae,ENT_QUOTES,'utf-8');
        $denwa = $_POST['denwa'];
        $denwa = htmlspecialchars($denwa,ENT_QUOTES,'utf-8');
        $monthDay = $_POST['monthDay'];
        $monthDay = htmlspecialchars($monthDay,ENT_QUOTES,'utf-8');
        $time = $_POST['time'];
        $time = htmlspecialchars($time,ENT_QUOTES,'utf-8');
        $seki = $_POST['seki'];
        $seki = htmlspecialchars($seki,ENT_QUOTES,'utf-8');
        $toten = $_POST['toten'];
        // var_dump($toten);
        // $toten = htmlspecialchars($toten,ENT_QUOTES,'UTF-8');
        ?>
        <?php
            echo 'ご予約ありがとうございます。'."<br>";
            echo '以下の内容で承りました。'."<br>";
            echo "お名前："."$namae".'<br>';
            echo "電話番号："."$denwa".'<br>';
            echo "予約日時："."$monthDay"." $time".'<br>';
            echo "希望席："."$seki".'<br>';
            echo "当店をお知りになったきっかけ：".'<br>';
            // foreach ($toten as $key => $value) {
            //     // code...
            //     echo $value.',';
            // }
            echo implode (",",$toten);

         ?>
         <br>
         <input type="button" name="" value="戻る" onclick="history.back()">
         <!-- <a href="form.html" onclick="history.back()">前のページに戻る</a> -->
    </body>
</html>
