<?php
unset($_SESSION["id"]);
unset($_SESSION["admin"]);
header("location:login.php");
