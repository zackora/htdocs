<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>確認画面</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="inquiry">
            <?php
                $dsn = 'mysql:dbname=contactus;host=localhost';
                $user = 'root';
                $password = 'admin';
                $dbh = new PDO($dsn,$user,$password);
                $dbh -> query('SET NAMES utf8');

                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $name = htmlspecialchars($name);
                $email = htmlspecialchars($email);
                $message = htmlspecialchars($message);

                echo $name.'様<br>'."\n";
                echo 'お問い合わせ、ありがとうございました。<br>'."\n";
                echo 'お問い合わせ内容『'.$message.'』を<br>'."\n";
                echo $email.'にメールで送りましたのでご確認ください。<br>'."\n";

                $mail_sub = 'お問い合わせを受け付けました。';
                $mail_body = $name.'様、ご協力ありがとうございました。';
                $mail_body = html_entity_decode($mail_body,ENT_QUOTES,'UTF-8');
                $mail_head = 'From:xxx@gmail.com';
                mb_language('Japanese');
                mb_internal_encoding('UTF-8');
                mb_send_mail($email,$mail_sub,$mail_body,$mail_head);

                $sql = 'INSERT INTO inquiry(name,email,message)VALUES("'.$name.'","'.$email.'","'.$message.'")';
                $stmt = $dbh -> prepare($sql);
                $stmt -> execute();

                $dbh = null;
             ?>
             <ul>
                 <li><a href="index.php">トップページに戻る</a></li>
             </ul>
        </div><!-- id="inquiry" -->
    </body>
</html>
