<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $namae = $_POST['namae'];
            $namae = htmlspecialchars($namae, ENT_QUOTES, 'utf-8');
            $denwa = $_POST['denwa'];
            $denwa = htmlspecialchars($denwa, ENT_QUOTES, 'utf-8');
            $monthDay = $_POST['monthDay'];
            $monthDay = htmlspecialchars($monthDay, ENT_QUOTES, 'utf-8');
            $time = $_POST['time'];
            $time = htmlspecialchars($time, ENT_QUOTES, 'utf-8');
            $seki = $_POST['seki'];
            $seki = htmlspecialchars($seki, ENT_QUOTES, 'utf-8');
            // $toten = $_POST['toten'];
            // $toten = htmlspecialchars($toten, ENT_QUOTES, 'utf-8');

            foreach ($toten as $value) {
                $value = htmlspecialchars($value);
            }
            // echo '<pre>';
            // print_r($_POST);
            // echo '</pre>';
         ?>
    </body>
</html>
