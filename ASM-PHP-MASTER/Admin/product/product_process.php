<?php
require("../../mysqli_connect.php");
if (isset($_POST["upload"])) {
    $upload = "img/product/" . basename($_FILES["FileToImage"]["name"]);
    $upload_file = "../../" . $upload = "img/product/" . basename($_FILES["FileToImage"]["name"]);
    $upload_ok = 1;
    $imageFileType = pathinfo($upload_file, PATHINFO_EXTENSION);
    $check = getimagesize(($_FILES["FileToImage"]["tmp_name"]));
    // if ($check !== false) {
    //     $upload_ok = 1;
    // } else {
    //     $upload_ok = 0;
    // }
    // if ($_FILES["FileToImage"]["size"] > 500000) {
    //     $upload_ok = 0;
    // }
    // if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    //     $upload_ok = 0;
    // }
    // if ($upload_ok == 0) {
    //     echo "Sorry, your file was not uploaded.</br>";
    // } else {
        $query = "insert into products(products_name, products_img, products_price) values ('" . $_POST["productname"] . "','" . $upload . "','" . $_POST["price"] . "');";
        echo $query;
        if (mysqli_query($conn, $query) === true) {
            if (!file_exists($upload_file)) {
                move_uploaded_file($_FILES["FileToImage"]["tmp_name"], $upload_file);
            }
            header("Location:../administrator/admin.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    // }
}
