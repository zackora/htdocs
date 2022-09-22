<?php

session_start();

$_SESSION['correct'] = 0;

$title = '第3部「スターダストクルセイダース」の主人公の名前は何？';

$question = array();
$question = array('花京院典明', '空条承太郎', '東方仗助', '空条徐倫');

$answer = $question[1];

shuffle($question);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>クイズ</title>
</head>

<body>
    <h1>ジョジョ３部クイズ</h1>
    <h2>全１０問です。頑張ってください。※ネタバレ含みます。</h2>
    <a href="3bu-1.php">
        <input type="button" name="" value="Open the Game !!!!">
    </a>
</body>

</html>
