<?php 
    include './config.php';
    
    $product_name = $_POST['product_name'];
    $desc = $_POST['desc'];
    $availability = $_POST['availability'];
    $status = $_POST['status'];
    $featured = isset($_POST['featured']) ? 'on' : 'off';
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    // echo $featured;
    // get image from the form
    
    $imageName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];

    // save the file in the server

    move_uploaded_file($tmpName,'./category_images/' . $imageName);

    // move the data into the database

     $insert = "INSERT INTO products (name,image,description,availability,status,featured,category_id,price) VALUES ('$product_name','$imageName','$desc','$availability',$status,'$featured',$category_id,$price)";

    mysqli_query($connection,$insert);

    header("Location: http://localhost:3000/admin-category.php")



?>