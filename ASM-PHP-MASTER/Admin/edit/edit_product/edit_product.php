<?php
$product_name = $price = $image = $product_name_err = $price_err = "";
include("process_edit_product.php");
include("check_input.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../Register/style.css">
    <script src="../../../JavaScrips.js"></script>
    <title>Update-Product</title>
</head>

<body>
    <div class="title">
        <h1>Update - Product</h1>
    </div>
    <form method="POST" action="edit_product.php?productid=<?php echo $_GET["products_id"] ?>" enctype="multipart/form-data">
        <div class="form">
            <label for="">Product Name</label><br>
            <input type="text" name="productname" value="<?php echo $product_name ?>">
            <span class="error"><?php echo $product_name_err ?></span><br>
            <label for="">Price</label><br>
            <input type="text" name="price" value="<?php echo $price ?>">
            <span class="error"><?php echo $price_err ?></span><br>
            <label for="">Image</label><br>
            <img src="../../../<?php echo $image ?>" alt="image_product" width="50%" height="auto"><br />
            <label for="">Upload Image</label><br>
            <input type="file" name="FileToImage" id="FileToImage">
        </div>
        <input type="submit" name="update" value="Update" style="cursor: pointer">
    </form>
    <a href="../../administrator/admin.php" name="return">Return</a>
</body>

</html>