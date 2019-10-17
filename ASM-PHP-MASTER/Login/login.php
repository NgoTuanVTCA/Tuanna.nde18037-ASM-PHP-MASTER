<?php
$emailErr = $pwErr = $hihiErr = $email = $pw = "";
include('process_login.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="title">
        <h1>Login</h1>
    </div>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form">
            <label for="">Email</label><br>
            <input type="email" name="email">
            <span class="error"><?php echo $emailErr; ?></span><br>
            <label for="">Password</label><br>
            <input type="password" name="pw">
            <span class="error"><?php echo $pwErr; ?></span><br>
        </div>
        <input type="submit" name="Login" value="Login" id="button-login">
        <a href="../Register/register.php">Create an account</a>
        <span class="error"><?php echo $hihiErr; ?></span><br>
        <a href="../index.php" id="return">Return</a>
    </form>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email is not empty!";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email form";
        }
    }
    if (empty($_POST["pw"])) {
        $pwErr = "Password is not empty!";
    } else {
        $pw = test_input($_POST["pw"]);
        if (strlen($_POST["pw"]) < 6) {
            $pwErr = "Password must be greater than 6 characters !";
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>