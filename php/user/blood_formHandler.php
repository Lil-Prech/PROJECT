<?php

session_start();

require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = htmlspecialchars($_POST['name']);
    $date = htmlspecialchars($_POST['date']);
    $blood_group = htmlspecialchars($_POST['blood_group']);
    $description = htmlspecialchars($_POST['description']);
    $hospital_address = htmlspecialchars($_POST['Haddress']);


    if (
        empty($name) || empty($blood_group) || empty($description) || empty($hospital_address) ||
        trim($name) == '' || trim($blood_group) == '' ||
        trim($description) == '' || trim($hospital_address) == ''
    ) {
        $_SESSION['error'] = "All fields must be filled";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    $query = "INSERT INTO blood_request (requester_name, blood_group_id, description, hospital_name, required_date) VALUES 
                (:name, :blood_group, :description, :hospital_address,:date)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':blood_group', $blood_group);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':hospital_address', $hospital_address);
    $stmt->bindParam(':date', $date);

    $result = $stmt->execute();

    if ($result) {
        $_SESSION['success'] = "Blood Requested Successfully";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        $_SESSION['error'] = "An error occurred";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

}