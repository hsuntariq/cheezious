<?php 
    include './config.php';
    $name = $_POST['name'];
    $product_name = $_POST['product_name'];
    $desc = $_POST['desc'];
    $availability = $_POST['availability'];
    $status = $_POST['status'];
    $featured = isset($_POST['featured']) ? 'on' : 'off';
    // echo $featured;
    // get image from the form
    
    $imageName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];

    // save the file in the server

    move_uploaded_file($tmpName,'./category_images/' . $imageName);

    // move the data into the database

     $insert = "INSERT INTO categories (name,product_name,image,description,availability,status,featured) VALUES ('$name','$product_name','$imageName','$desc','$availability',$status,'$featured')";

    mysqli_query($connection,$insert);

    header("Location: http://localhost:3000/admin-category.php")



?>