<?php

session_start();

require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $f_name = htmlspecialchars($_POST['f_name']);
    $l_name = htmlspecialchars($_POST['l_name']);
   /*  $username = htmlspecialchars($_POST['username']); */
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $gender = htmlspecialchars($_POST['gender']);
    $birth_date = htmlspecialchars($_POST['birth_date']);
    $blood_group = htmlspecialchars($_POST['blood_group']);
    $city = htmlspecialchars($_POST['city']);
    $postal_code = htmlspecialchars($_POST['postal_code']);
    $zip = htmlspecialchars($_POST['zip']);
    $is_checked = $_POST['is_checked'];

    if (
        empty($f_name) || empty($l_name) || empty($email) || empty($tel) || empty($gender) ||
        empty($birth_date) || empty($blood_group) || empty($city) || empty($postal_code) ||
        trim($f_name) == '' || trim($l_name) == '' ||
        trim($email) == '' || trim($tel) == '' || trim($gender) == '' || trim($birth_date) == '' ||
        trim($blood_group) == '' || trim($city) == ''
    ) {
        $_SESSION['error'] = "All fields must be filled";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    if(empty($is_checked)){
        $_SESSION['termError'] = "Please agree to the terms and conditions";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    $query1 = "SELECT * FROM users WHERE email ='$email'";
    $user = $conn->query($query1)->fetch(PDO::FETCH_ASSOC);

    if(!empty($user)){
        $_SESSION['Existerror'] = "User already exists! Try another email or login";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    $query = "INSERT INTO users (first_name, last_name, email, phone_number, gender, blood_group, birth_date) 
    VALUES (:f_name, :l_name,  :email, :tel, :gender, :blood_group, :birth_date)";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':f_name', $f_name);
    $stmt->bindParam(':l_name', $l_name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':blood_group', $blood_group);
    $stmt->bindParam(':birth_date', $birth_date);
    $result = $stmt->execute();

    if($result){
        $id = $conn->lastInsertId();
        $query2 = "INSERT INTO user_address (user_id, city, postal_code, zip) VALUES ('$id' ,:city, :postal_code, :zip)";
        $sql = $conn->prepare($query2);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':postal_code', $postal_code);
        $sql->bindParam(':zip', $zip);
        $sql->execute();
    }

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}