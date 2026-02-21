<?php
session_start();
include './config.php';
$email = $_POST['email'];
$pass = $_POST['password'];
$current_page = $_SERVER['HTTP_REFERER'];

$check = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";

$result = mysqli_query($connection, $check);


if(mysqli_num_rows($result) > 0){
    foreach($result as $item){
        $_SESSION['token'] = $item['name'];
        $_SESSION['user_id'] = $item['id'];
        }
}else{
    $_SESSION['error'] = 'Invalid Credentials';
}

header("Location: $current_page");


?>