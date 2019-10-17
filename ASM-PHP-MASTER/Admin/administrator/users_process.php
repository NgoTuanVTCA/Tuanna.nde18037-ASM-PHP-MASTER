<?php
if ($_SESSION["email"] !== null) {
    require("../../mysqli_connect.php");
    $select = "select * from users";
    $result = mysqli_query($conn, $select);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["email"] === "admin@gmail.com") {
                echo "<tr><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"] . "</td><td>" . date("d-m-Y", strtotime($row["registration_date"])) . "</td><td> <a href='../edit/edit-profile/edit_profile.php?id=" . $row["userid"] . "'>edit</a></td><td><a href='../delete_account/delete.php?id=" . $row["userid"] . "' onclick='return checkdelete()'>delete_account</a> </td></tr>";
            } else {
                echo "<tr><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"] . "</td><td>" . date("d-m-Y", strtotime($row["registration_date"])) . "</td><td><a href='../edit/edit-profile/edit_profile.php?id=" . $row["userid"] . "'>edit</a></td><td><a href='../delete_account/delete.php?id=" . $row["userid"] . "' onclick='return checkdelete()'>delete_account</a></td></tr>";
            }
        }
    }
} else {
    header("Location:../../index.php");
}
