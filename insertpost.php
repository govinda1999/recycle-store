<?php
session_start();
include('config.php');
$email = $title = $description = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $verify = "fasle";
    $user_id = $_SESSION["id"];
    $user = $_SESSION["admin"];
    $sql = "insert into post (id,title,description,user_id,verify) values(NULL,'$title','$description','$user_id','$verify')";

    if ($user == false) {
        $result = mysqli_query($link, $sql);
        header("location: dashboard.php");
    }
}

mysqli_close($link);
