<?php
    define('DB_DATABASE', 'nissho_db');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'admin');
    define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

    try {
        $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //delete all
        $db->exec('delete from users');
        echo 'deleted?';

        $sql = 'insert into users (name,score) values (?,?)';
        $stmt = $db->prepare($sql);
        $name = 'yoshikawa';
        $score = 55;
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $score, PDO::PARAM_INT);
        $stmt->execute();

        $name = 'nissho';
        $score = 82;
        $stmt->execute();
        $name = 'mitaka';
        $score = 66;
        $stmt->execute();
        echo 'inserted';

        // $db->exec('insert into users (name, score) values ("taguchi", 55)');
        // echo 'user added.';

        //select all
        // $stmt = $db->query('select * from users');
        $stmt = $db->prepare('select score from users where score > ?');
        $stmt->execute([40]);
        $stmt = $db->prepare('select name from users where name like ?');
        $stmt->execute(['%h%']);

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($users as $user){
            var_dump($user);
            // echo $user . '<br>';
            // foreach($user as $key=>$userr){
            //     echo "($key) $userr" . '<br>';
            // }
        }
        echo $stmt->rowCount() . ' records found.';
        // $stmt->execute(['taguchi', 33]);
        // $stmt = $db->prepare('insert into users (name, score) values (?, ?)');
        // $stmt = $db->prepare('insert into users (name, score) values (:name, :score)');
        // $stmt->execute([':name'=>'fkoji', ':score'=>'90']);
        // echo 'inserted: ' . $db->lastInsertId();

        // $name = 'taguchi';
        // $stmt->bindValue(1, $name, PDO::PARAM_STR);
        // $score = 23;
        // $stmt->bindValue(2, $score, PDO::PARAM_INT);
        // $stmt->execute();
        // $score = 55;
        // $stmt->bindValue(2, $score, PDO::PARAM_INT);
        // $stmt->execute();

        // $stmt->bindParam(2, $score, PDO::PARAM_INT);
        // $score = 52;
        // $stmt->execute();
        // $score = 458;
        // $stmt->execute();
        // $score = 3;
        // $stmt->execute();


        $db = null;
    }
    catch (PDOException $e){
        echo $e->getMassage();
        exit;
    }

 ?>
