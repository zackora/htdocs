<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="" method="post">
            <?php
            echo '<input type="text" name="name" value=""><br>
            <input type="submit" name="" value="確認"><br>';
            $str = $_POST['name'];
            echo $str, "です。<br>", PHP_EOL;
            switch($str){
                case '犬':
                    echo "bowwowと鳴きます。";
                    break;
                case '猫':
                    echo "meowと鳴きます。";
                    break;
                case '牛':
                    echo "mowと鳴きます。";
                    break;
                default:
                    echo "どのように啼くのか。";
            }

            ?>
        </form>
    </body>
</html>
