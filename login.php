<?php
require 'connect.php';
$username = $_GET["username"];
$password = $_GET["password"];

$query_sql = "SELECT * FROM tbl_users
WHERE username = '$username' AND password = '$password' ";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: dashboard.html");
}
else { 
    echo "<center><h1>Username atau Password Anda Salah. Sila Cuba lagi.</h1>
    <button><strong><a href='index.html'>Login</a></strong></button></center>";
}
