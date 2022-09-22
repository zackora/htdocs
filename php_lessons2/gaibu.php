<?php
    spl_autoload_register(function($class) {
        require $class . ".class.php";
    });

    $bob = new User("Bob");
    $bob->sayHi();
 ?>
