<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>終了</title>
</head>
<body>
    成績：10問中 <?php echo $_SESSION['correct']; ?> 問正解！！！
    <br><br><br>
    <img src="images/end.jpg" alt="おわり">
    <br>
    <br>
    <a href="tensu.php">
        <button>成績登録</button>
    </a>
    <br>
    <br>
    <a href="index.php">
        <button>タイトルに戻る</button>
    </a>
</body>
</html>
