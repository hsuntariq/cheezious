<?php 

    session_start();
    session_unset();
    session_destroy();

    $currentPage = $_SERVER['HTTP_REFERER'];
    

    header("Location: $currentPage")

?>