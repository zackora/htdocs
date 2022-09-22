<?php
    $username = '';
    $err = false;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        if (strlen($username) > 8){
            $err = true;
        }
    }
 ?>

 <!DOCTYPE html>
 <html lang="ja" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Check Username</title>
     </head>
     <body>
         <form class="" action="" method="post">
             <input type="text" name="username" value="<?php echo htmlspecialchars($username, ENT_QUOTES, 'utf-8'); ?>" placeholder="user name">
             <input type="submit" name="" value="Check">
             <?php if ($err) {echo 'Too lonnnnnng';} ?>
         </form>
     </body>
 </html>
