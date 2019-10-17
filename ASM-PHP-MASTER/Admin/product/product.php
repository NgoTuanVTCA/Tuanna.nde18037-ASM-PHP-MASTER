<?php
$product_name = $price = $price_err = $product_name_err = $discount = $discount_err = "";
include("product_process.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../Register/style.css">
    <script src="../../JavaScrips.js"></script>
    <title>Insert-Product</title>
</head>

<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" enctype="multipart/form-data">
        <div class="form">
            <label for="">Product name</label><br>
            <input type="text" name="productname">
            <span class="error"><?php echo $product_name_err ?></span><br>
            <label for="">Price</label><br>
            <input type="text" name="price">
            <span class="error"><?php echo $price_err ?></span><br>
            <label for="">Upload Image</label><br>
            <input type="file" name="FileToImage" id="FileToImage">
        </div>
        <input type="submit" name="upload" value="Upload" style="cursor: pointer">
    </form>
    <a href="../administrator/admin.php" name="return">Return</a>
</body>

</html>