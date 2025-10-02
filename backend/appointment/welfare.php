<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS'); // Allow POST and OPTIONS methods
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With'); // Required headers for CORS
header('Content-Type: application/json');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit;
}

include './db/database.php'; // Include your database connection file

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Get JSON payload from the incoming request
        $data = json_decode(file_get_contents("php://input"), true);

        // Check if the required fields are present in the payload
        if (isset($data['applicant_name'], $data['age'], $data['address'], $data['service_type'], $data['description'])) {
            // Retrieve form fields from the JSON payload
            $applicant_name = $data['applicant_name'];
            $age = $data['age'];
            $address = $data['address'];
            $service_type = $data['service_type'];
            $description = $data['description'];

            // Insert the data into the 'welfare' table in your MySQL database
            $query = "INSERT INTO welfare (applicant_name, age, address, service_type, description) 
                      VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($query);

            // Check if the statement was prepared successfully
            if (!$stmt) {
                echo json_encode([
                    'status' => 0,
                    'message' => 'Failed to prepare the SQL statement: ' . $conn->error,
                ]);
                exit;
            }

            // Bind the parameters to the SQL query
            $stmt->bind_param("sisss", $applicant_name, $age, $address, $service_type, $description);

            // Execute the query and check the result
            if ($stmt->execute()) {
                echo json_encode([
                    'status' => 1,
                    'message' => 'Data submitted successfully to the database.',
                ]);
            } else {
                echo json_encode([
                    'status' => 0,
                    'message' => 'Failed to insert data into the database: ' . $stmt->error,
                ]);
            }

            $stmt->close(); // Close the prepared statement
        } else {
            echo json_encode([
                'status' => 0,
                'message' => 'Invalid input. Required fields missing.',
            ]);
        }
    } catch (Exception $e) {
        echo json_encode([
            'status' => 0,
            'message' => 'An error occurred: ' . $e->getMessage(),
        ]);
    }
} else {
    echo json_encode([
        'status' => 0,
        'message' => 'Access Denied. Only POST requests are allowed.',
    ]);
}

// Close the database connection
$conn->close();

?>
