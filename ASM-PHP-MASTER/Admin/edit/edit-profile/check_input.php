<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["fname"]) || empty($_POST["lname"])) {
        $fnameErr1 = "First name is not empty!";
        $lnameErr1 = "Last name is not empty!";
    } else {
        $fname = test_input($_POST["fname"]);
        $lname = test_input($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $fname) || !preg_match("/^[a-zA-Z ]*$/", $lname)) {
            $fnameErr1 = "Only letters and white space allowed";
            $lnameErr1 = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["email"])) {
        $emailErr1 = "Email is not empty!";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr1 = "Invalid email form";
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