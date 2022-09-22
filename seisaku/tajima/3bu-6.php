<?php

$title = 'DIOの肉体は本来は誰の物？';

// $question = array();
$question = array('ジョナサン', 'ジョセフ', 'ジョニィ', 'ジョージ');

$answer = $question[0];

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
    <h1>第6問</h1>
    <h2><?php echo $title; ?></h2>
    <form method="POST" action="answer.php">
        <img class="gazou" src="images/aza.jpg" alt="" style="width:70%; height:50%;"><br>
        <?php foreach ($question as $value) { ?>
            <div class="sentakushi">
                <input type="submit" name="question" value="<?php echo $value; ?>"><br>
            </div>
        <?php } ?>
        <?php echo '<input type="hidden" name="answer" value="' . $answer . '">' ?>
        <?php echo '<input type="hidden" name="mondai" value="6">' ?>
    </form>
</body>

</html>