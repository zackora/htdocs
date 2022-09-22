<?php
    define('DB_DATABASE', 'nissho_db');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'admin');
    define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

    try {
        $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $db->exec('insert into users (name, score) values ("taguchi", 55)');
        echo 'user added.';

        $db = null;
    }
    catch (PDOException $e){
        echo $e->getMassage();
        exit;
    }

 ?>
