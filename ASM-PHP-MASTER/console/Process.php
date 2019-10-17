<?php
require("../mysqli_connect.php");
$query = "select * from products";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $newprice = $row["price"] - ($row["price"] / 100 * $row["product_discount"]);
        echo "<div class='product'>
                <a href='#'>
                    <div class='product__image'>
                        <div class='discount-badge'>-" . $row["product_discount"] . "%</div>
                        <img src='../" . $row["products_img"] . "' alt='" . $row["products_name"] . "'>
                    </div>
                    <div class='product__title'>
                        <i class='icon icon-tikinow'></i>
                        " . $row["products_name"] . "
                    </div>
                    
                </a>
            </div>";
    }
}
