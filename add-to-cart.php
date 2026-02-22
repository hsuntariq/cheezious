<?php 
    session_start();
    include './config.php';

    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user_id'];
    $extras = $_POST['extras'];


    $add = "INSERT INTO cart (product_id,user_id,extras) VALUES ($product_id,$user_id,'$extras')";
    mysqli_query($connection,$add);
    header("Location: {$_SERVER['HTTP_REFERER']}");
    $_SESSION['cart_success'] = 'Added to cart!'





?>