<?php
unset($_SESSION["id"]);
unset($_SESSION["admin"]);
session_unset();
session_destroy();
header("location:login.php");
