<?php
require("../../../mysqli_connect.php");
session_start();
if ($_SESSION["email"] !== null) {
    try {
        if ($_GET["userid"] !== null) {
            $select = "select * from users where userid = " . $_GET["userid"];
            $result = mysqli_query($conn, $select);
            $row = $result->fetch_assoc();
            $fname = $row["first_name"];
            $lname = $row["last_name"];
            $email = $row["email"];
        }
    } catch (Exception $ex) {
        echo "Error " . $ex;
    }
    if (isset($_POST["update"])) {
        if ($fnameErr1 !== "" || $lnameErr1 !== "" || $emailErr1 !== "") { } else {
            $sql = "update users set first_name = '" . $_POST["fname"] . "', last_name = '" . $_POST["lname"] . "', email = '" . $_POST["email"] . "' where userid = " . $_GET["userid"];
            if (mysqli_query($conn, $sql) === true) {
                header("Location:../administrator/admin.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        $conn->close();
    }
} else {
    header("Location:../../../index.php");
}
