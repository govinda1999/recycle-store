<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location:http://localhost/recycle-store/login.php");
}
include "./config.php";

$target = "upload/user/" . $_SESSION["id"];
$target = $target . basename($_FILES['Filename']['name']);

//This gets all the other information from the form
$Filename = basename($_FILES['Filename']['name']);


//Writes the Filename to the server
if (move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
    //Tells you if its all ok
    echo "The file " . basename($_FILES['Filename']['name']) . " has been uploaded, and your information has been added to the directory";
    // Connects to your Database
    $res = $_SESSION["id"] . $_FILES['Filename']['name'];
    $sql = "update user set user_pic ='" . $res . "' where id =" . $_SESSION["id"];
    mysqli_query($link, $sql);
    header("location:http://localhost/recycle-store/profile.php");
} else {
    //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
}
