<?php
$dsn = 'mysql:dbname=contactus;host=localhost';
$user = 'root';
$password = 'admin';
$dbh = new PDO($dsn,$user,$password);
$dbh -> query('SET NAMES UTF8');

$sql = 'SELECT * FROM inquiry WHERE 1';
$stmt = $dbh -> prepare($sql);
$stmt -> execute();
 ?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>検索</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="inquiry">
            <h1>検索画面</h1>
            <p>コードを入力してください（半角数字）</p>
            <form id="search" action="search.php" method="post">
                <select id="code" name="code">
                    <option value="" selected="selected">コードを選択してください</option>
                    <?php
                    while (1) {
                        $rec = $stmt -> fetch(PDO::FETCH_ASSOC);
                        if($rec == false){
                            break;
                        }
                        echo '<option value="' . $rec['code'] . '">' . $rec['code'] .' '. $rec['name'] . '</option>';
                        // echo '<tr>';
                        // echo '<th>'.$rec['code'].'</th>';
                        // echo '<td>'.$rec['name'].'</td>';
                        // echo '<td>'.$rec['email'].'</td>';
                        // echo '<td>'.$rec['message'].'</td>';
                        // echo '</tr>';
                    }
                    $dbh = null;
                     ?>
                    <!-- <option value="code[]">1</option>
                    <option value="code[]">2</option>
                    <option value="code[]">3</option>
                    <option value="code[]">4</option>
                    <option value="code[]">5</option> -->
                </select>
                <br>
                <input type="submit" value="検索">
            </form>
            <ul>
                <li><a href="menu.html">メニューに戻る</a></li>
            </ul>
        </div><!-- id="inquiry" -->
    </body>
</html>
