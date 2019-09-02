<?php
include('config.php');
$email = $title = $description = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "insert into post values(?,?,?,?,?)";

    $title = $_POST["title"];
    $description = $_POST["description"];
    $email = 'govinda@gmail.com';
    $id;
    $verify = 0;
    if ($stmt = mysqli_prepare($link, $sql)) {

        mysqli_stmt_bind_param($stmt, "isssi", $id, $title, $description, $email, $verify);

        if (mysqli_stmt_execute($stmt)) {

            header("location: post.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }


    mysqli_stmt_close($stmt);
}

mysqli_close($link);
