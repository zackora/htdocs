<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="" method="post">
            <?php
            echo '人数は：<input type="text" name="ninzu" value=""><br>';
            echo '予算は：
            <input type="text" name="yosan" value=""><br>
            <input type="submit" name="" value="確定"><br>';

            $ninzu = $_POST['ninzu'];
            $yosan = $_POST['yosan'];


            if(($ninzu >= 4) && ($ninzu <= 17) && ($yosan >= 3500)){
                echo '人数は', $ninzu, '人です<br>';
                echo '1人あたりの予算は', $yosan, '円です<br>';
                echo 'グループメニューを注文できます。';
            }
            elseif(($ninzu < 4) && ($ninzu > 17) && ($yosan < 3500)){
                echo '人数は', $ninzu, '人です<br>';
                echo '1人あたりの予算は', $yosan, '円です<br>';
                echo 'グループメニューを注文できません。';
            }elseif($ninzu = ''){
                echo '未入力の項目があります。数値を入力して下さい。';
            }
            else{

            }
            ?>
        </form>
    </body>
</html>
