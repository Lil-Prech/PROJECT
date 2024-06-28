<?php
session_start();
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

   if(empty($name) || empty($email) || empty($message) || trim( $name) == '' || trim($email) == '' || trim($message) == ''){
     $_SESSION['error'] = "All fields must be filled";
     header("Location: " . $_SERVER['HTTP_REFERER']);
     exit();
   }

     $query = "INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)";
     $stmt = $conn->prepare($query);
     $stmt->bindParam(':name', $name);
     $stmt->bindParam(':email', $email);
     $stmt->bindParam(':message', $message);
     $stmt->execute();
     
     $_SESSION['success'] = "Message sent successfully";
     header("Location: " . $_SERVER['HTTP_REFERER']);
    
}