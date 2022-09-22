<?php

$title = 'スタープラチナのオラオララッシュ、最長は「オラ」が何回使われた？';

// $question = array();
$question = array('52回', '50回', '54回', '60回');

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
    <h1>第10問</h1>
    <h2><?php echo $title; ?></h2>
    <form method="POST" action="answer.php">
        <img class="gazou" src="images/ora.png" alt="" style="width:70%; height:50%;"><br>
        <?php foreach ($question as $value) { ?>
            <div class="sentakushi">
                <input type="submit" name="question" value="<?php echo $value; ?>"><br>
            </div>
        <?php } ?>
        <?php echo '<input type="hidden" name="answer" value="' . $answer . '">' ?>
        <?php echo '<input type="hidden" name="mondai" value="10">' ?>
    </form>
</body>

</html>