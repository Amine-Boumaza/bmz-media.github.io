<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include 'connect.php';

    // Store uploaded image
    $name = $_POST['name'];
    $image_path = '../uploads/' . $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_tmp_name, $image_path);
    $story = $_POST['story'];
    // Store image in database

    $sql = "INSERT INTO images (url, name, story) VALUES ('$image_path', '$name', '$story')";
    if (mysqli_query($conn, $sql)) {
        header('Location: /index.php');
        exit();
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
    }


    mysqli_close($conn);
}
