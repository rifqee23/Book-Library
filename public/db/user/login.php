<?php
include "../connection.php";
session_start();

if (isset($_SESSION['user'])) {
    header("Location: ../../home.php");
    exit();
}

if (isset($_POST["submit"])) {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row;

        header("Location: ../../home.php");
        exit();
    } else {
        echo "<script>alert('Password Salah');</script>";
    }
}
