<?php
$fnameErr = $lnameErr = $emailErr = $pwErr = $re_pwErr = $hihiErr = "";
$fname = $lname = $email = $pw = $re_pw = "";
include("process_register.php");
include("check_input.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="../JavaScrips.js"></script>
    <title>Register</title>
</head>

<body>
    <div class="title">
        <h1>Register</h1>
    </div>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form">
            <label for="">Firstname</label><br>
            <input type="text" name="fname" value="<?php echo $fname ?>">
            <span class="error"><?php echo $fnameErr; ?></span><br>
            <label for="">Lastname</label><br>
            <input type="text" name="lname" value="<?php echo $lname ?>">
            <span class="error"><?php echo $lnameErr; ?></span><br>
            <label for="">Email</label><br>
            <input type="email" name="email" value="<?php echo $email ?>">
            <span class="error"><?php echo $emailErr; ?></span><br>
            <label for="">Password</label><br>
            <input type="password" name="pw" id="pass" value="<?php echo $pw ?>">
            <span class="error"><?php echo $pwErr; ?></span><br>
            <span id="errPass">Invalid Password</span><br>
        </div>
        <input type="submit" name="register" value="register" style="cursor: pointer">
        <a href="../index.php">You had account</a>
        <span class="error"><?php echo $hihiErr; ?></span><br>
    </form>
</body>

</html>