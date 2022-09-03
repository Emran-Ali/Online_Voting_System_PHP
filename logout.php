<?php
    session_start();
    echo "success";

    session_destroy();
    header('location:./home.php');

?>