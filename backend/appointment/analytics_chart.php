<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json');

require '../db/database.php';
$obj = new Database();

try {
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {

        $data_body = json_decode(file_get_contents("php://input"));

        $dateFrom   = isset($data_body->dateFrom) ? htmlentities($data_body->dateFrom) : null;
        $dateTo     = isset($data_body->dateTo) ? htmlentities($data_body->dateTo) : null;

        $where="";
        if($dateFrom && $dateTo){
            $where.=" AND DATE(date_created) BETWEEN '{$dateFrom}' and '{$dateTo}' ";
        }
         

        $obj->select('applications', "application_type as category, sum(amount) as value ",null,$where,null,null,null," application_type");
        $list = $obj->getResult();
 
        echo json_encode([
            'status' => 1,
            'message' => $list,
        ]);

    } else {
        http_response_code(405);
        echo json_encode([
            'status' => 0,
            'message' => 'Method Not Allowed'
        ]);
    }
} catch (Exception $e) {
    // Internal Server Error
    http_response_code(500); // Internal Server Error
    echo json_encode([
        'status' => 0,
        'message' => 'Internal Server Error: ' . $e->getMessage()
    ]);
}