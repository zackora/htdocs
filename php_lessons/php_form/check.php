<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>確認画面</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="inquiry">
            <h2>確認画面</h2>
            <?php
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $name = htmlspecialchars($name);
                $email = htmlspecialchars($email);
                $message = htmlspecialchars($message);
                echo "<ul>"."\n";
                echo "<li>";
                if($name == '') {
                    echo 'お名前が入力されていません。<br>'."\n";
                } else {
                    echo 'お名前: '.$name.'<br>'."\n";
                }
                echo '</li>'."\n";
                echo "<li>";
                if($email == '') {
                    echo 'メールアドレスが入力されていません。<br>'."\n";
                } else {
                    echo 'メールアドレス: '.$email.'<br>'."\n";
                }
                echo '</li>'."\n";
                echo "<li>";
                if($message == '') {
                    echo 'お問い合わせの内容が入力されていません。<br>'."\n";
                } else {
                    echo 'お問い合わせの内容: '.$message.'<br>'."\n";
                }
                echo '</li>'."\n";
                echo '</ul>';

                if ($name == ''|| $email == ''|| $message == '') {
                    echo '<p>未記入の項目があります。「<span class="deco">戻る</span>」ボタンをクリックしてください。</p>'."\n";
                    echo '<div class="submit">'."\n";
                    echo '<form>'."\n";
                    echo '<input type="button" onClick="history.back()" value="戻る">'."\n";
                    echo '</form>'."\n";
                    echo '</div>'."\n";
                } else {
                    echo '<p>以上の内容を送信します。よろしければ「<span class="deco">送信</span>」ボタンを、修正する場合は「<span class="deco">戻る</span>」ボタンをクリックしてください。</p>'."\n";
                    echo '<div class="submit">'."\n";
                    echo '<form action="thanks.php" method="post">'."\n";
                    echo '<input type="hidden" name="name" value="'.$name.'">'."\n";
                    echo '<input type="hidden" name="email" value="'.$email.'">'."\n";
                    echo '<input type="hidden" name="message" value="'.$message.'">'."\n";
                    echo '<input type="button" onClick="history.back()" value="戻る">'."\n";
                    echo '<input type="submit" value="送信">'."\n";
                    echo '</form>'."\n";
                    echo '</div>'."\n";
                }
             ?>
        </div><!-- class="inquiry" -->
    </body>
</html>
