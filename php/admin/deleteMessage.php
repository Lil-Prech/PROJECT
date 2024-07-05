<?php
require_once ("../user/connection.php");

$id = $_GET['id'];
$sql = "DELETE FROM messages WHERE id = $id";
$deleted = $conn->query($sql);

if (!$deleted) {
    echo "Error: An error occured while deleting the message. Please try again." ;
    header("Location: ../../dashboard/messages.php");
    exit();
} else {
    header("Location: ../../dashboard/messages.php");
}