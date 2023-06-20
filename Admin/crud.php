<?php
require("connect.php");

function image_upload($img)
{
    // $tmp_loc = $img['tmp_name'];
    // $new_name = random_int(11111, 99999) . $img['name'];

    // $new_loc = UPLOAD_SRC . $new_name;
    // if (!move_uploaded_file($tmp_loc, $new_loc)) {
    //     header("location: product.php?alert=img_upload");
    //     exit;
    //     echo "file moved";
    // } else {
    //     return $new_name;
    // }
}
function image_remove($img)
{
    if (unlink(UPLOAD_SRC . $img)) {
        echo "deleted";
    } else {
        echo "not deleted";
    }
}
if (isset($_POST['addproduct'])) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = mysqli_real_escape_string($con, $value);
    }
    $imgpath = image_upload($_FILES['image']);
    $query = "INSERT INTO `products`(`name`, `price`, `description`, `image`) 
    VALUES ('$_POST[name]','$_POST[price]','$_POST[desc]','$imgpath')";

    if (mysqli_query($con, $query)) {
        header("location: product.php?success=added");
    } else {
        header("location: product.php?alert=add_failed");
    }
}
if (isset($_GET['rem']) && $_GET['rem'] > 0) {
    $query = "SELECT * FROM `products` WHERE 'id'='$_GET[rem]'";
    $result = mysqli_query($con, $query);
    $fetch = mysqli_fetch_assoc($result);

    image_remove($fetch['image']);
}
