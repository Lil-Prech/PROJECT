<?php
function getBloodGroup($conn){
    $query = "SELECT * FROM blood_groups";
    $results = $conn->query( $query)->fetchAll(PDO::FETCH_ASSOC);
    
    return $results;
}