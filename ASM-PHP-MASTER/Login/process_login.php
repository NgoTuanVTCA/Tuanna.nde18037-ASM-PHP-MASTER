<?php
session_start();
require("../mysqli_connect.php");
if (isset($_SESSION["email"])) {
    session_unset();
    session_destroy();
}
if (isset($_POST["Login"])) {
    $select = "select * from users";
    $result = mysqli_query($conn, $select);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["email"] === $_POST["email"] && password_verify($_POST["pw"], $row["password"])) {
                $_SESSION["email"] = $row["email"];
                $_SESSION["first_name"] = $row["first_name"];
                $_SESSION["last_name"] = $row["last_name"];
                if ($row["user_level"] == 1) {
                    header("Location:../Admin/administrator/admin.php");
                } else {
                    header("Location:../index.php");
                }
            } else {
                $hihiErr = "The email or password that you've entered is incorrect.";
            }
        }
        $conn->close();
    }
}
