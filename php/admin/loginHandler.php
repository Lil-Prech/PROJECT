<?php
require_once("../user/connection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $email;
    //$sql = "SELECT * FROM `admin` WHERE email = '$email'";
    
}