<form class="" action="#" method="post">
    <input type="text" name="suu" value="">
    <input type="submit" name="" value="送信">
</form>
<?php
 $score = $_POST['suu'];
 $score = htmlspecialchars($score, ENT_QUOTES, 'utf-8');

 if ($score >= 80){
     echo 'great';
 }
 elseif($score >= 60){
     echo 'good';
 }
 elseif ($score == ''){
     echo 'number please.';
 }
 else {
     echo 'sososososo';
 }
 ?>
