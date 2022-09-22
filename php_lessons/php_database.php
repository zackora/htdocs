<?php

define('DB_DATABASE','nissho_db');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','useruser');
define('PDO_DSN','mysql:dbhost=localhost;dbname='.DB_DATABASE);

// class user {
//     //public $id;
//     //public $name;
//     //public $score;
//     public function show() {
//         echo "$this->name ($this->score)<br>";
//     }
// }


try {
    //connect
    $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //insert
    // $db->exec("insert into users (name,score) values ('taguchi',55)");
    // echo "user added!";

    // $stmt = $db->prepare("insert into users (name,score) values (?,?)");
    // $stmt->execute(['taguchi',44]);
    // $stmt = $db->prepare("insert into users (name,score) values (:name,:score)");
    // $stmt->execute([':name'=>'fkoji',':score'=>80]);
    // echo "inserted: ".$db->lastInsertId();

    // $stmt = $db->prepare("insert into users (name,score) values (?,?)");
    //
    // $name = 'yoshikawa';
    // $score = 55;
    // $stmt->bindParam(1,$name,PDO::PARAM_STR);
    // $stmt->bindParam(2,$score,PDO::PARAM_INT);
    // $stmt->execute();
    //
    // $name = 'nissho';
    // $score = 82;
    // $stmt->execute();
    // $name = 'mitaka';
    // $score = 66;
    // $stmt->execute();

    // $name = 'taguchi';
    // $stmt->bindValue(1,$name,PDO::PARAM_STR);
    // $stmt->bindValue(':name',$name,PDO::PARAM_STR);
    // $score = 23;
    // $stmt->bindValue(2,$score,PDO::PARAM_INT);
    // $stmt->execute();
    // $score = 44;
    // $stmt->bindValue(2,$score,PDO::PARAM_INT);
    // $stmt->execute();

    // $stmt->bindParam(2,$score,PDO::PARAM_INT);
    // $score = 52;
    // $stmt->execute();
    // $score = 44;
    // $stmt->execute();
    // $score = 6;
    // $stmt->execute();

    //PDO::PARAM_NULL
    //PDO::PARAM_BOOL

    //select all
    // $stmt = $db->query("select * from users");
    // $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // foreach ($users as $user) {
    //     // var_dump($user);
    //     // echo '<br>';
    // }
    // echo '<pre>';
    // print_r ($users);
    // echo '</pre>';
    // echo $stmt->rowCount()."records found.";

    //select
    // $stmt = $db->query("select * from users");
    // $stmt = $db->prepare("select score from users where score > ?");
    // $stmt->execute([60]);
    // $stmt = $db->prepare("select name from users where name like ?");
    // $stmt->execute(['%t%']);

    // $stmt = $db->prepare('select score from users order by score desc limit ?');
    // $stmt->bindValue(1,1,PDO::PARAM_INT);
    // $stmt->execute();


    // $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // foreach ($users as $user) {
    //     var_dump($user);
    //     echo '<br>';
    // }
    // // echo '<pre>';
    // // print_r ($users);
    // // echo '</pre>';
    // echo $stmt->rowCount()."records found.";

    //disconnect
    // $db = null;

    //FETCH_CLASS
    // $stmt = $db->query('select * from users');
    // $users = $stmt->fetchAll(PDO::FETCH_CLASS,'user');
    // foreach ($users as $user) {
    //     $user->show();
    // }

    //update
    $stmt = $db->prepare("update users set score = :score where name = :name");
    $stmt->execute([
        ':score' => 100,
        ':name' => 'yoshikawa'
    ]);
    echo 'row updated: '.$stmt->rowCount();

    //delete
    $stmt = $db->prepare("delete from users where name = :name");
    $stmt->execute([
        ':name' => 'nissho'
    ]);
    echo 'row deleted: '. $stmt->rowCount();


} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
// echo 'user added!';
 ?>
