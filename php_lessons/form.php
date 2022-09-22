<?php

$username = '';
$err = false;
if ( $_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    if (strlen($username) > 8) {
        $err = true;
    }
}

 ?>
 <!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Check username</title>
    </head>
    <body>
        <form class="" action="" method="POST">
            <input type="text" name="username" placeholder="username" value="<?php echo htmlspecialchars($username,ENT_QUOTES,'UTF-8'); ?>">
            <input type="submit" name="" value="Check!">
            <?php if ($err) { echo "Too long!" ; } ?>
        </form>
    </body>
</html>
