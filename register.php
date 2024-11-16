<?php
require 'connect.php';
$fullname = $_GET["fullname"];
$username = $_GET["username"];
$email = $_GET["email"];
$password = $_GET["password"];

$query_sql = "INSERT INTO tbl_users (fullname, username, email, password) VALUE ('$fullname', '$username', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.html");
}
else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
