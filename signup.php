<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$pass = $_POST['password'];

$current_page = $_SERVER['HTTP_REFERER'];

include './config.php';


$add = "INSERT INTO users (name,email,password,address) VALUES ('$name','$email','$pass','$address')";

mysqli_query($connection, $add);

$_SESSION['token'] = $name;
$_SESSION['user_id'] = mysqli_insert_id($connection);

header("Location: $current_page");




?>