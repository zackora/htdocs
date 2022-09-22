<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="" method="post">
            <input type="text" name="num" value="">
            <input type="submit" name="" value="確定"><br>
            <?php
            $num = $_POST['num'];
            $num = htmlspecialchars($num, ENT_QUOTES, 'utf-8');
            echo $num, '個の●を表示します。<br>';
            for($cnt = 0; $cnt < $num; $cnt++){
                echo '●';
            }
            ?>
        </form>
    </body>
</html>
