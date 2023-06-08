<?php
    $db_connect = new mysqli("127.0.0.1","root","MMatano@123","PHP");

    if ($db_connect -> connect_error) {
        echo $db_connect -> error;
    }
?>