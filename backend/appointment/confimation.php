<?php

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method:POST');
header('Content-Type:application/json');

include '../db/database.php';

// Instantiate Database class
$obj = new Database();

// Read raw POST data and decode JSON
$data = json_decode(file_get_contents("php://input"));

// Check if data is valid
if ($_SERVER['REQUEST_METHOD'] == "POST" && $data) {


    $status         = isset($data->status)              ? htmlentities($data->status) : null;
    $usertype       = isset($data->usertype)            ? htmlentities($data->usertype) : null;
    $action         = isset($data->action)              ? htmlentities($data->action) : null;
    $application_id = isset($data->application_id)      ? htmlentities($data->application_id) : null;



    if (strtoupper($usertype) === "ADMIN") {
        $data = [
            "confirm_byadmin" => $status
        ];
    } else {
        $data = [
            "confirm_by_worker" => $status
        ];
    }


    $obj->update('applications', $data, " application_id = '{$application_id}' ");

    // Check result and respond accordingly

    $data = $obj->getResult();

    if (isset($data[0]) && $data[0] == 1) {
        echo json_encode([
            'status' => 1,
            'message' => '',
        ]);
    } else {
        echo json_encode([
            'status' => 0,
            'message' => 'Server problem, could not add user',
        ]);
    }
} else {
    // Handle invalid access
    echo json_encode([
        'status' => 0,
        'message' => 'Access denied or invalid request',
    ]);
}
