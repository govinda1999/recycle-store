<?php
session_start();
include("./config.php");
$email = $password = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = md5($password);
    if ($_POST["usertype"] == "user") {
        $sql = "select * from user where email='$email' and password='$password'";
        $result = mysqli_query($link, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION["id"] = $row["id"];
            $_SESSION["admin"] = false;
            header("location: dashboard.php");
        } else {
            header("location:signup.php");
        }
    } else {
        echo "Admin Login";
    }
}

mysqli_close($link);
