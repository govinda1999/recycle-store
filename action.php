<?php
session_start();
include "./config.php";
if (isset($_POST["profile"])) {
    $sql = "select email,address,mobile,Name,user_pic from user where id=" . $_SESSION["id"];
    $query = mysqli_query($link, $sql);
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $email    = $row['email'];
            $address = $row['address'];
            $mobile = $row['mobile'];
            $name = $row['Name'];
            $user_pic = $row['user_pic'];
            echo '
            
            <div class="col-6 mt-3 mb-3 ">
            <div class="row">
            <div class="col-6 p-3" style="height:325px">
            <img src=./upload/user/' . $user_pic . ' class="h-75 w-100 border" style="border-radius:50%"></img>
            <form action="upload.php" method="post" enctype="multipart/form-data" class="pt-3 pl-3">
            <input type="file" name="Filename" id="Filename" >
            <p class="text-center"><input type="submit" value="Upload" name="submit" class="btn btn-outline-success mt-1"></p>
            </form>
            </div>
            <div class="col-6 pt-4 mt-3 mb-3">
            <h2 class="text-capitalize">' . $name . '</h2>
            <h5 class="">' . $email . '</h5>
            <h5 class="text-capitalize ">' . $mobile . '</h5>
            <h5 class="text-capitalize ">' . $address . '</h5>
            </div>
            </div>
            ';
        }
    }
}
