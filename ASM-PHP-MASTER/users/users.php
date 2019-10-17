<?php include("../Logout/process_logout.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Home-Page</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h1>Hello <?php echo $_SESSION["email"] ?></h1>
        <input type="submit" name="Logout" value="Logout" style="cursor: pointer">
    </form>
</body>

</html>