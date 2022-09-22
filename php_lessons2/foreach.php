<?php
    $colors = ['red', 'blue', 'pink'];

    foreach($colors as $value):
        echo "$value ";
    endforeach;
 ?>
<ul>
    <?php foreach ($colors as $value) : ?>
    <li><?php echo "$value "; ?></li>
    <?php endforeach; ?>
</ul>
