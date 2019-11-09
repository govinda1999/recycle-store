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
            <div class="col-md-6 col-12 mt-3 mb-3 ">
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


if (isset($_POST["post_profile"])) {
    $sql = "select * from post where user_id =" . $_SESSION["id"] . " order by id DESC limit 10 ";
    $query = mysqli_query($link, $sql);
    $count = mysqli_num_rows($query);
    if ($count > 0) {
        echo '<div class="col-1"></div>
        <div class="col-1"><h3 class="text-justify">ID</h3></div>
        <div class="col-3"><h3 class="text-justify">Title</h3></div>
        <div class="col-4"><h3 class="text-justify">Description</h3></div>
        <div class="col-2"><h3 class="text-jutify">Verified</h3></div>
        <div class="col-1"></div>';
        $x = 1;
        while ($row = mysqli_fetch_array($query)) {
            $title = $row['title'];
            $description = $row['description'];
            $verify = $row['verify'];
            echo '<div class="col-1"></div>
                  <div class="col-1"><h6 class="text-justiy text-capitalize">' . $x . '</h6></div>
                  <div class="col-3"><h6 class="text-justiy text-capitalize">' . $title . '</h6></div>
                  <div class="col-4"><h6 class="text-justiy text-capitalize">' . $description . '</h6></div>
                  <div class="col-2"><h6 class="text-justiy text-capitalize">' . $verify . '</h6></div>
                  <div class="col-1"></div>';
            $x++;
        }
    } else {
        echo '<div><p class="text-center h3">Post Section Is Empty!!!!!</p></div>';
    }
}

if (isset($_POST["post"])) {
    $sql = "select * from post where user_id =" . $_SESSION["id"] . " order by id DESC";
    $query = mysqli_query($link, $sql);
    $count = mysqli_num_rows($query);
    if ($count > 0) {
        echo '<div class="col-1"></div>
        <div class="col-1"><h3 class="text-justify">ID</h3></div>
        <div class="col-3"><h3 class="text-justify">Title</h3></div>
        <div class="col-4"><h3 class="text-justify">Description</h3></div>
        <div class="col-3"><h3 class="text-jutify">Verified</h3></div>';
        $x = 1;
        while ($row = mysqli_fetch_array($query)) {
            $id = $row['id'];
            $title = $row['title'];
            $description = $row['description'];
            $verify = $row['verify'];
            $false = 'false';
            echo '<div class="col-1"></div>
                  <div class="col-1"><h5 class="text-justiy text-capitalize">' . $x . '</h5></div>
                  <div class="col-3"><h5 class="text-justiy text-capitalize">' . $title . '</h5></div>
                  <div class="col-4"><h5 class="text-justiy text-capitalize">' . $description . '</h5></div>
                  <div class="col-3">';
            // if ($verify == 'false') {
            //     echo '<button class="btn btn-outline-danger ml-3" id="remove_post" onclick="post_remove(event)" remove_post=' . $id . '>Remove</button>';
            // } else {
            //     echo '<h5 class="text-justiy text-capitalize ml-3">' . $verify . '</h5>';
            // }
            echo '<h5 class="text-justiy text-capitalize ml-3">' . $verify . '</h5>';
            echo '</div>';
            $x++;
        }
    } else {
        echo '<div><p class="text-center h3">Post Section Is Empty!!!!!</p></div>';
    }
}


// if (isset($_POST["removepost"])) {
//     $remove_id = $_POST["rid"];
//     $sql = 'DELETE FROM post WHERE id = ' . $remove_id . ' AND user_id = ' . $_SESSION["id"];
//     if (mysqli_query($link, $sql)) {
//         echo "<div class='alert alert-danger'>
// 						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
// 						<b>Post is removed!!!</b>
// 				</div>";
//         exit();
//     } else {
//         echo "<div class='alert alert-danger'>
//         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
//         <b>Post is Not removed!!!</b>
// </div>";
//     }
// }
