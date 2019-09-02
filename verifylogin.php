<?php
include("./config.php");
$email = $password = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "select * from user where email='$email' and password='$password'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        header("location: dashboard.php");
    } else {
        echo "Something went wrong. Please try again later.";
    }
}

mysqli_close($link);
?>