<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="#" method="post">
            <input type="text" name="todocont" value="" size="30" maxlength="100">
            <?php
                $prioDisp = 2;
                $selStr = array('', '', '');
                $prio = 0;
                if(isset($_POST['priority'])){
                    $prio = (int)$_POST['priority'];
                }
             ?>
             <select class="" name="priority">
                 <option value="2">すべて</option>
                 <option value="1">高</option>
                 <option value="0">低</option>
             </select>
             <br><br>
             <input type="submit" name="insert" value="追加">
             <input type="submit" name="search" value="検索">
             <input type="submit" name="delete" value="削除">
             <pre>
<?php
                    $dsn = 'mysql:dbname=zpdb;host=localhost;charset=utf8mb4';
                    $user = 'root';
                    $password = 'admin';
                    try{
                        $dbh = new PDO($dsn, $user, $password);
                        } catch (PDOException $e){
                            die('Connect Error: ' . $e->getCode());
                        }
                        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

                        if(isset($_POST['insert'], $_POST['todocont']) && $_POST['todocont'] != ''){
                            if($prio < 0 || $prio > 1) {
                                $prio = 0;
                            }
                            $sql = 'INSERT INTO todolist (todo, prio, created) VALUES (?, ?, CURDATE())';
                            $sth = $dbh->prepare($sql);
                            $sth->bindValue(1, $_POST['todocont'], PDO::PARAM_STR);
                            $sth->bindValue(2, $prio, PDO::PARAM_INT);
                            $sth->execute();
                        }

                        $sql = 'SELECT id, todo FROM todolist';
                        $sth = $dbh->prepare($sql);
                        $sth->execute();
                        while($row = $sth->fetch(PDO::FETCH_ASSOC)){
                            echo '<input type="checkbox" name="chktodo[]" value="';
                            echo htmlspecialchars($row['id'], ENT_QUOTES, 'utf-8');
                            echo '">';
                            echo htmlspecialchars($row['todo'], ENT_QUOTES, 'utf-8'), PHP_EOL;
                        }
                        $dbh = null;
                  ?>
             </pre>
        </form>
    </body>
</html>
