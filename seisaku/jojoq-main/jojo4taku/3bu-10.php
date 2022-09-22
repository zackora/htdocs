<?php

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
    <h1>第１問</h1>
    <h2><?php echo $title; ?></h2>
    <form method="POST" action="answer.php">
        <img src="images/joutarou.png" alt="3部の主人公" style="width:70%; height:50%;"><br>
        <?php foreach($question as $value) { ?>
        <input type="radio" name="question" value="<?php echo $value; ?>"><?php echo $value; ?><br>
        <?php } ?>
        <?php echo '<input type="hidden" name="answer" value="' . $answer .'">' ?>
        <?php echo '<input type="hidden" name="mondai" value="10">' ?>
        <input type="submit" value="決定">
    </form>
</body>

</html>
