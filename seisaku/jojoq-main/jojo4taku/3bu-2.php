<?php

$title = '第3部「スターダストクルセイダース」の敵ボスの名前は何？';

$question = array();
$question = array('DIO', 'DUO', 'DIEGO', '吉良吉影');

$answer = $question[0];

shuffle($question);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クイズ</title>
</head>

<body>
    <h1>第2問</h1>
    <h2><?php echo $title; ?></h2>
    <form method="POST" action="answer.php">
        <img src="images/dio.jpg" alt="3部のボス" style="width:70%; height:50%;"><br>
        <?php foreach($question as $value) { ?>
        <input type="radio" name="question" value="<?php echo $value; ?>"><?php echo $value; ?><br>
        <?php } ?>
        <?php echo '<input type="hidden" name="answer" value="' . $answer .'">' ?>
        <?php echo '<input type="hidden" name="mondai" value="2">' ?>
        <input type="submit" value="決定">
    </form>
</body>

</html>
