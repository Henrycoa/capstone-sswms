<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: application/json');

require '../db/database.php';
$obj = new Database();

try {
    if ($_SERVER["REQUEST_METHOD"] == 'GET') {

        $data_body = json_decode(file_get_contents("php://input"));
        $search =  $_GET['search'] ?? '';
        $application_type =  $_GET['application_type'] ?? '';
        $page =  $_GET['page'] ??  '1';

        $user_type = $_GET['user_type'] ?? null;

 

        $fields = " a.application_id,
                    a.application_for,
                    a.application_type,
                    a.beneficiary_address,
                    a.beneficiary_district,
                    a.beneficiary_barangay,
                    a.beneficiary_civil_status,
                    a.beneficiary_gender,
                    a.client_address,
                    a.relationship,
                    a.client_lastname,
                    a.client_firstname,
                    a.client_middlename,
                    a.client_suffix,
                    a.client_gender,
                    a.client_address,
                    a.gmail,
                    a.application_status,
                    a.contact_num,
                    a.beneficiary_lastname,
                    a.beneficiary_firstname,
                    a.beneficiary_middlename,
                    a.beneficiary_city_mun,
                    a.beneficiary_suffix,
                    
                    a.date_released,

                   
                    b.valid_id, 
                    b.enrollment_cert, 
                    b.date_created,
                    b.lrn,
                    b.school_id,
                    b.coi,
                    b.Valid_ID,
                    b.coi,
                    b.name_school,
                    b.year_level,

                    b.form_137,
                    b.form_138,
                    b.barangay_clearance,
                    b.goodmoral,
                    b.psa,

                    




                    b.guardian_id,
                    b.guardian_full_name


               

                   
                     ";
        $join = " LEFT JOIN application_scholarships_appointment b ON b.application_id=a.application_id ";
        // $join .= " LEFT JOIN application_4ps_program c ON c.application_id=a.application_id ";
        $order = null;
        $limit = 5;
        $offset = ($page * $limit) - 5;

        $searchArray = explode(" ", $search);

        $where = "";
        if ($search) {
            foreach ($searchArray as $word) {
                $where .= " AND (
                a.beneficiary_lastname LIKE '%{$word}%' 
                OR a.beneficiary_firstname LIKE '%{$word}%' 
                OR a.beneficiary_middlename LIKE '%{$word}%'
            )";
            }
        }

        if ($application_type) {
            $where .= " AND a.application_type = '{$application_type}' ";
        }


        $additionalWhere="";
        if($user_type==="ADMIN"){
            $additionalWhere=" AND application_status='APPROVED' ";
        }
        else{
            $additionalWhere=" AND application_status!='APPROVED' ";
        }



        $obj->select('applications a', $fields, $join, $where.$additionalWhere, null, $limit, $offset);
        $list = $obj->getResult();

        $obj->select('applications a', $fields, $join, $where);
        $list2 = $obj->getResult();

        echo json_encode([
            'status' => 1,
            'message' => $list,
            'count' => (count($list2) - $offset) - $limit,
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
