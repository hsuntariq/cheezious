<?php 
    session_start();
    include './config.php';

    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user_id'];
    $extras = $_POST['extras'];



$check = "SELECT * FROM cart WHERE product_id = $product_id AND user_id = $user_id";
$result = mysqli_query($connection, $check);
if($result->num_rows > 0){
    $update = "UPDATE cart SET quantity = quantity + 1 WHERE product_id = $product_id AND user_id $user_id";
    mysqli_query($connection, $update);
     header("Location: {$_SERVER['HTTP_REFERER']}");
    $_SESSION['cart_success'] = 'Added to cart!';
}else{
  $add = "INSERT INTO cart (product_id,user_id,extras) VALUES ($product_id,$user_id,'$extras')";
    mysqli_query($connection,$add);
    header("Location: {$_SERVER['HTTP_REFERER']}");
    $_SESSION['cart_success'] = 'Added to cart!';
}






  





?>