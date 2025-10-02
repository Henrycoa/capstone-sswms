<?php

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method:POST');
header('Content-Type:application/json');

include '../db/database.php';
include '../mailer/mail.php';


// Instantiate Database class
$obj = new Database();

// Read raw POST data and decode JSON
$data = json_decode(file_get_contents("php://input"));

// Check if data is valid
if ($_SERVER['REQUEST_METHOD'] == "POST" && $data) {

    // Get data and sanitize
    $status         = isset($data->status)         ? htmlentities($data->status) : null;
    $usertype       = isset($data->usertype)         ? htmlentities($data->usertype) : null;
    $action         = isset($data->action)         ? htmlentities($data->action) : null;
    $application_id = isset($data->application_id)         ? htmlentities($data->application_id) : null;
    $email          = isset($data->email)         ? htmlentities($data->email) : null;

   
     $data = [
        "application_status"           => $status
    ];

    if($action=="insert"){
        $obj->insert('applications', $data);
    }
    else if($action=="update"){
        $obj->update('applications', $data, " application_id = '{$application_id}' ");

        $message = "youre request has been declined ";

        sendEmail($email, "denied ", $message);
        
    }


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

} 
else {
    // Handle invalid access
    echo json_encode([
        'status' => 0,
        'message' => 'Access denied or invalid request',
    ]);
}

?>
