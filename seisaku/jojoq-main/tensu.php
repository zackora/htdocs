<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>score</title>
    </head>
    <body>
            <?PHP
            $dsn ='mysql:host=localhost;dbname=quiz;charset=utf8;';
            $user ='root';
            $pass ='admin';

            try{
                $dbh = new PDO($dsn,$user,$pass);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//エラーの表示

            }catch( PDOException $e){
                echo 'エラー'.$e->getMessage();
                exit;
            } ?>
            <div class="list">

            </div>
            $inser = $dbh->query('INSERT INTO tensu (name, score) VALUES ("test", 6)');
            // $inser->execute();
            $result_rows = $dbh->query('SELECT * FROM tensu');
            foreach ( $result_rows as $row ) {
                // テーブルの1行ごとに1つの配列として格納されている（$row）
                // その1行ごとの配列内で、列名をキーにした連想配列でデータが格納されている。
                echo "name: {$row['name']}  "; // id列
                echo "score: {$row['score']}"; // name列
                echo '<br>';
            }

            ?>
    </body>
</html>
