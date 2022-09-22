<?php
    if(isset($_SERVER['PHP_AUTH_USER'])) {
        header('www-Authenticate: Basic realm="Private Page"');
        
    }
 ?>
