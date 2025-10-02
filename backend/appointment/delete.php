<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: DELETE');
header('Content-Type: application/json');
include '../db/database.php'; // Include your database connection file

$requestMethod = $_SERVER['REQUEST_METHOD'];
if ($requestMethod == 'DELETE') {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];

    $stmt = $conn->prepare("DELETE FROM welfare WHERE id=?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }
}
?>
