<?php 
    session_start();
    include './config.php';

    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user_id'];



    $add = "INSERT INTO cart (product_id,user_id) VALUES ($product_id,$user_id)";
    mysqli_query($connection,$add);
    header("Location: {$_SERVER['HTTP_REFERER']}");
    $_SESSION['cart_success'] = 'Added to cart!'





?>