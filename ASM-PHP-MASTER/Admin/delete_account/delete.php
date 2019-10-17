<?php
require("../../mysqli_connect.php");
$id = $_GET["id"];
$productid = $_GET["productid"];
if ($id !== null) {
    $sql = "delete from users where userid = " . $id;
}
if ($productid !== null) {
    $sql = "delete from products where products_id = " . $productid;
}
if (mysqli_query($conn, $sql) === true) {
    header("Location:../administrator/admin.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
