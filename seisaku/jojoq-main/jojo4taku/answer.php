<?php

    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $question = htmlspecialchars($question,ENT_QUOTES,'utf-8');
    $answer = htmlspecialchars($answer,ENT_QUOTES,'utf-8');


    if ($question == $answer){
        $result = '正解！！<br>' . '<img src="images/seikai.png" alt="正解！">';
    }
    else {
        $result = '残念！！';
    }

    // $next = rand(1, 10)
    $i = $_POST['mondai'];
    $i = htmlspecialchars($i,ENT_QUOTES,'utf-8');

    if($i < 10){
        $next = '3bu-' . ++$i;
        $tsugi = '次の問題へ';
    }else{
        $next = 'kekka';
        $tsugi = '結果発表ッ！';
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クイズ　結果</title>
</head>
<body>
    <?php echo $result; ?>
    <br>
    <?php echo
    '<a href="' . $next . '.php">
    <input type="button" name="" value="' . $tsugi . '">
    </a>'
    ?>

</body>
</html>
