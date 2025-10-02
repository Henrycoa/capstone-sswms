<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include '../db/database.php'; // Include your database connection file

$requestMethod = $_SERVER['REQUEST_METHOD'];
if ($requestMethod == 'GET') {
    if (isset($_GET['id'])) {
        // Get specific record
        $id = $_GET['id'];
        $stmt = $conn->prepare("SELECT * FROM welfare WHERE id=?");
        $stmt->bind_param("i", $id);
    } else {
        // Get all records
        $stmt = $conn->prepare("SELECT * FROM welfare");
    }

    $stmt->execute();
    $result = $stmt->get_result();
    
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
}
?>
    