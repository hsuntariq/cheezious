<?php 
    include './config.php';
    $category_name = $_POST['category_name'];
    $current_page = $_SERVER['HTTP_REFERER'];
    $insert = "INSERT INTO categories (name) VALUES ('$category_name')";
    mysqli_query($connection,$insert);
    header("Location: $current_page");



?>