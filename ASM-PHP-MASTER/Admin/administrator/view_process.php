<?php
require("../../mysqli_connect.php");
if ($_SESSION["email"] !== null) {
    $query = "select * from products";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["products_name"] . "</td><td><img src='../../" . $row["products_img"] . "' alt='" . $row["products_name"] . "' width='50px''></td><td>" . number_format($row["products_price"], 0, "", ".") . " VNĐ</td><td>" . $row["product_discount"] . "%</td><td><a href='../edit/edit_product/edit_product.php?productid=" . $row["products_id"] . "'>edit</a></td><td><a href='../delete_account/delete.php?productid=" . $row["products_id"] . "' onclick='return checkdelete()'>delete_account</a></td></tr>";
        }
    }
} else {
    header("Location:../../index.php");
}
