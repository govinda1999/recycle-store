<?php
session_start();
include("./config.php");
$name = $email = $password = $address = '';
$mobile;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];
    $sql = "select id from user where email = '$email' LIMIT 1";
    $check_query = mysqli_query($link, $sql);
    $count_email = mysqli_num_rows($check_query);
    if ($count_email > 0) {

        echo "
        <div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address is already available Try Another email address</b>
			</div>
        ";
        header("location: signup.php");
        exit();
    } else {
        $password = md5($password);
        $sql = "insert into user(id,name,email,password,mobile,address) values (NULL,'$name','$email','$password','$mobile','$address')";
        $run_query = mysqli_query($link, $sql);
        header("location: login.php");
    }
}

mysqli_close($link);
