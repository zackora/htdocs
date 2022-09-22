<?php

//  ループ処理
// for
// break: ループを抜ける
// continue: それ以降の処理を実行せずに次のループに移る

// $i = 0;
// while ($i < 10) {
//  echo $i;
// $i++;
// }

for ($i = 0; $i < 10; $i++) {
    // if ($i === 5) {
    //     //break;
    //     continue;
    // }
    echo $i;
}
for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        break;
        //continue;
    }
    echo $i;
}
 ?>
