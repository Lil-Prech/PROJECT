<?php

$dbuser = 'root';
$dbpassword = '';
$db = 'blood_bank';
$host = 'localhost';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $dbuser, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}