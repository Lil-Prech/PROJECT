<?php
session_start();
require_once ("../user/connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE email = '$email'";
    $result = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
      header("Location: ../../index.php");
      exit; 
    }

    if (password_verify($password, $result['password'])) {
        $_SESSION['admin'] = $result;
        header("Location: ../../Dashboard/home.php");
    }else{
        $_SESSION['Loginerror'] = "Invalid email or password";
        header("Location: $_SERVER[HTTP_REFERER]");
    }

}