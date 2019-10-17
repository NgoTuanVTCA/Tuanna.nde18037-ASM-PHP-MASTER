<?php
require("../../../mysqli_connect.php");
session_start();
if ($_SESSION["email"] !== null) {
    try {
        $select = "select * from products where products_id =" . $_GET["products"];
        $result = mysqli_query($conn, $select);
        $row = $result->fetch_assoc();
        $product_name = $row["products_name"];
        $price = $row["products_price"];
        $image = $row["products_img"];
        $discount = $row["product_discount"];
    } catch (Exception $ex) {
        echo "Connection Errors" . $ex;
    }
    if (isset($_POST["update"])) {
        $upload = "Image/product/" . basename($_FILES["FileToImage"]["name"]);
        $upload_file = "../../../" . $upload = "Image/product/" . basename($_FILES["FileToImage"]["name"]);
        $upload_ok = 1;
        $image_type = strtolower((pathinfo($upload_file, PATHINFO_EXTENSION)));
        $check = getimagesize(($_FILES["FileToImage"]["tmp_name"]));
        if ($check !== false) {
            $upload_ok = 1;
        } else {
            $upload_ok = 0;
        }
        if ($_FILES["FileToImage"]["size"] > 500000) {
            $upload_ok = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $upload_ok = 0;
        }
        if ($upload_ok == 0) {
            echo "Sorry, your file was not update.</br>";
        } else {
            if ($product_name_err !== "" || $price_err !== "") { } else {
                $sql = "update products set products_name = '" . $_POST["productname"] . "', products_price = '" . $_POST["price"] . "', products_img = '" . $upload . "' , product_discount = '" . $_POST["discount"] . "'  where product_id = " . $_GET["productid"];
                if (mysqli_query($conn, $sql) === true) {
                    if (!file_exists($upload_file)) {
                        move_uploaded_file($_FILES["FileToImage"]["tmp_name"], $upload_file);
                    }
                    header("Location:../../administrator/admin.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        $conn->close();
    }
} else {
    header("Location: ../../../index.php");
}
