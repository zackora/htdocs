<?php

$title = '第3部「スターダストクルセイダース」の主人公の名前は何？';

// $question = array();
$question = array('花京院典明', '空条承太郎', '東方仗助', '空条徐倫');

$answer = $question[1];

shuffle($question);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>クイズ</title>
</head>

<body class="sanbu">
    <h1>第1問</h1>
    <h2><?php echo $title; ?></h2>
    <form method="POST" action="answer.php">
        <img class="gazou" src="images/joutarou.png" alt="3部の主人公" style="width:40%; height:30%;">
        <?php foreach($question as $value) { ?>
        <div class="sentakushi">
        <!-- <a href="answer.php">
            <input type="radio" name="question" value="<?php echo $value; ?>"><?php echo $value; ?><br>
        </a> -->
            <input type="submit" name="question" value="<?php echo $value; ?>"><br>
        </div>
        <?php } ?>
        <?php echo '<input type="hidden" name="answer" value="' . $answer .'">' ?>
        <?php echo '<input type="hidden" name="mondai" value="1">' ?>
    </form>
</body>

</html>
