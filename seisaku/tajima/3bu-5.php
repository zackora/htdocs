<?php

$title = '空条承太郎の好きなスポーツは？';

// $question = array();
$question = array('相撲', '野球', 'サッカー', '柔道');

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
    <h1>第5問</h1>
    <h2><?php echo $title; ?></h2>
    <form method="POST" action="answer.php">
        <img class="gazou" src="images/sports.jpg" alt="" style="width:70%; height:50%;"><br>
        <?php foreach ($question as $value) { ?>
            <div class="sentakushi">
                <input type="submit" name="question" value="<?php echo $value; ?>"><br>
            </div>
        <?php } ?>
        <?php echo '<input type="hidden" name="answer" value="' . $answer . '">' ?>
        <?php echo '<input type="hidden" name="mondai" value="5">' ?>
    </form>
</body>

</html>