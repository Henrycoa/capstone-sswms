<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json');

include '../db/database.php';

// Instantiate Database class
$obj = new Database();

// Read raw POST data and decode JSON
$data = json_decode(file_get_contents("php://input"));

// Check if data is valid
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Get data and sanitize
    $microtime    = microtime(true);
    $milliseconds = round($microtime * 1000);

    function generateRandomString($length = 25)
    {
        $characters   = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }



    function handleFileUpload($fileField, $uploadDir = '../uploads/') {
        if (isset($_FILES[$fileField]) && $_FILES[$fileField]['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES[$fileField]['tmp_name'];
            $fileName = basename($_FILES[$fileField]['name']);
            $safeFileName = preg_replace('/[^a-zA-Z0-9_\.-]/', '_', $fileName);


            $uniq = uniqid();
            $destination = $uploadDir . $uniq . '_' . $safeFileName;
            $finaldestination = 'uploads/' . $uniq . '_' . $safeFileName;

    
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
    
            if (move_uploaded_file($fileTmpPath, $destination)) {
                return $finaldestination; // Return relative URL
            }
        }
        return null;
    }






    $application_id           = isset($_POST['application_id']) ? htmlentities($_POST['application_id']) : null;
    $full_name                = isset($_POST['full_name']) ? htmlentities($_POST['full_name']) : null;
    $application_for          = isset($_POST['application_for']) ? htmlentities($_POST['application_for']) : null;
    $application_type         = isset($_POST['application_type']) ? htmlentities($_POST['application_type']) : null;
    $relationship             = isset($_POST['relationship']) ? htmlentities($_POST['relationship']) : null;
    $beneficiary_lastname     = isset($_POST['beneficiary_lastname']) ? htmlentities($_POST['beneficiary_lastname']) : null;
    $beneficiary_firstname    = isset($_POST['beneficiary_firstname']) ? htmlentities($_POST['beneficiary_firstname']) : null;
    $beneficiary_middlename   = isset($_POST['beneficiary_middlename']) ? htmlentities($_POST['beneficiary_middlename']) : null;
    $beneficiary_suffix       = isset($_POST['beneficiary_suffix']) ? htmlentities($_POST['beneficiary_suffix']) : null;
    $beneficiary_gender       = isset($_POST['beneficiary_gender']) ? htmlentities($_POST['beneficiary_gender']) : null;
    $beneficiary_address      = isset($_POST['beneficiary_address']) ? htmlentities($_POST['beneficiary_address']) : null;
    $beneficiary_province     = isset($_POST['beneficiary_province']) ? htmlentities($_POST['beneficiary_province']) : null;
    $beneficiary_district     = isset($_POST['beneficiary_district']) ? htmlentities($_POST['beneficiary_district']) : null;
    $beneficiary_city_mun     = isset($_POST['beneficiary_city_mun']) ? htmlentities($_POST['beneficiary_city_mun']) : null;
    $beneficiary_barangay     = isset($_POST['beneficiary_barangay']) ? htmlentities($_POST['beneficiary_barangay']) : null;
    $beneficiary_civil_status = isset($_POST['beneficiary_civil_status']) ? htmlentities($_POST['beneficiary_civil_status']) : null;
    $client_lastname          = isset($_POST['client_lastname']) ? htmlentities($_POST['client_lastname']) : null;
    $client_firstname         = isset($_POST['client_firstname']) ? htmlentities($_POST['client_firstname']) : null;
    $client_middlename        = isset($_POST['client_middlename']) ? htmlentities($_POST['client_middlename']) : null;
    $client_suffix            = isset($_POST['client_suffix']) ? htmlentities($_POST['client_suffix']) : null;
    $client_gender            = isset($_POST['client_gender']) ? htmlentities($_POST['client_gender']) : null;
    $client_address           = isset($_POST['client_address']) ? htmlentities($_POST['client_address']) : null;
    $client_province          = isset($_POST['client_province']) ? htmlentities($_POST['client_province']) : null;
    $client_district          = isset($_POST['client_district']) ? htmlentities($_POST['client_district']) : null;
    $client_city_mun          = isset($_POST['client_city_mun']) ? htmlentities($_POST['client_city_mun']) : null;
    $client_barangay          = isset($_POST['client_barangay']) ? htmlentities($_POST['client_barangay']) : null;
    $client_civil_status      = isset($_POST['client_civil_status']) ? htmlentities($_POST['client_civil_status']) : null;
    $application_status       = isset($_POST['application_status']) ? htmlentities($_POST['application_status']) : null;
    $application_description  = isset($_POST['application_description']) ? htmlentities($_POST['application_description']) : null;
    $gmail                    = isset($_POST['gmail']) ? htmlentities($_POST['gmail']) : null;

    $action = isset($_POST['action']) ? htmlentities($_POST['action']) : "insert";

    if ($action == "insert") {
        $application_id = generateRandomString();
    }
 

    $dataApplication = [
        "application_id"           => $application_id,
        "application_for"          => $application_for,
        "application_type"         => $application_type,
        "relationship"             => $relationship,
        "beneficiary_lastname"     => $beneficiary_lastname,
        "beneficiary_firstname"    => $beneficiary_firstname,
        "beneficiary_middlename"   => $beneficiary_middlename,
        "beneficiary_suffix"       => $beneficiary_suffix,
        "beneficiary_gender"       => $beneficiary_gender,
        "beneficiary_address"      => $beneficiary_address,
        "beneficiary_province"     => $beneficiary_province,
        "beneficiary_district"     => $beneficiary_district,
        "beneficiary_city_mun"     => $beneficiary_city_mun,
        "beneficiary_barangay"     => $beneficiary_barangay,
        "beneficiary_civil_status" => $beneficiary_civil_status,
        "client_lastname"          => $client_lastname,
        "client_firstname"         => $client_firstname,
        "client_middlename"        => $client_middlename,
        "client_suffix"            => $client_suffix,
        "client_gender"            => $client_gender,
        "client_address"           => $client_address,
        "client_province"          => $client_province,
        "client_district"          => $client_district,
        "client_city_mun"          => $client_city_mun,
        "client_barangay"          => $client_barangay,
        "client_civil_status"      => $client_civil_status,
        "application_status"     => $application_status,
        "application_description"  => $application_description,
        "gmail"                    => $gmail,
    ];




 


    #for scholarships 

    $gmail = isset($_POST['gmail']) ?                           filter_var($_POST['gmail'], FILTER_SANITIZE_EMAIL) : null;

    $coi         = isset($_POST['coi']) ?                       htmlentities($_POST['coi']) : null;
    $contact_num = isset($_POST['contact_num']) ?               htmlentities($_POST['contact_num']) : null;
    $lrn         = isset($_POST['lrn']) ?                       htmlentities($_POST['lrn']) : null;
    $name_school = isset($_POST['name_school']) ?               htmlentities($_POST['name_school']) : null;
    $school_id   = isset($_POST['school_id']) ?                 htmlentities($_POST['school_id']) : null;
    $year_level  = isset($_POST['year_level']) ?                htmlentities($_POST['year_level']) : null;

    $application_type = isset($_POST['application_type']) ?     htmlentities($_POST['application_type']) : null;
    
    $guardian_contact   = isset($_POST['guardian_contact']) ?   htmlentities($_POST['guardian_contact']) : null;
    $guardian_full_name = isset($_POST['guardian_full_name']) ? htmlentities($_POST['guardian_full_name']) : null;


    $std_coi_url                    = handleFileUpload('std_coi');
    $guardian_id_url                = handleFileUpload('guardian_id');
    $add_scholar_school_id          = handleFileUpload('add_scholar_school_id');
    $add_scholar_enrollment_cert    = handleFileUpload('add_scholar_enrollment_cert');
    $beneficiary_form138            = handleFileUpload('beneficiary_form138');
    $beneficiary_psa                = handleFileUpload('beneficiary_psa');
    $beneficiary_form137            = handleFileUpload('beneficiary_form137');
    $beneficiary_barangay_clearance = handleFileUpload('beneficiary_barangay_clearance');
    $beneficiary_good_moral         = handleFileUpload('beneficiary_good_moral');


    


    #$guardian_id            = isset($data->guardian_id) ?                              htmlentities($data->guardian_id) : null;

    $dataScholarship = [

        "application_id"         => $application_id,


        "coi"                    => $std_coi_url,
        "contact_num"            => $contact_num,
        "lrn"                    => $lrn,
        "name_school"            => $name_school,
        "school_id"              => $school_id,
        "year_level"             => $year_level,

        "application_type"       => $application_type,


        "guardian_contact"       => $guardian_contact,
        "guardian_full_name"     => $guardian_full_name,
        "guardian_id"            => $guardian_id_url,



        "school_id"          => $add_scholar_school_id,
        "enrollment_cert"    => $add_scholar_enrollment_cert,
        "form_138"           => $beneficiary_form138,
        "psa"                => $beneficiary_psa,
        "form_137"           => $beneficiary_form137,
        "barangay_clearance" => $beneficiary_barangay_clearance,
        "goodmoral"          => $beneficiary_good_moral,
    ];


   #For Tupad
    $applicant_id    = isset($_POST['applicant_id'])            ?   htmlentities($_POST['applicant_id']) : null;
    $first_name      = isset($_POST['first_name'])              ?   htmlentities($_POST['first_name']) : null;
    $last_name       = isset($_POST['last_name'])               ?   htmlentities($_POST['last_name']) : null;
    $birthdate       = isset($_POST['birthdate'])               ?   htmlentities($_POST['birthdate']) : null;
    $gender          = isset($_POST['gender'])                  ?   htmlentities($_POST['gender']) : null;
    $barangay        = isset($_POST['barangay'])                ?   htmlentities($_POST['barangay']) : null;
    $municipality    = isset($_POST['municipality'])            ?   htmlentities($_POST['municipality']) : null;
    $province        = isset($_POST['province'])                ?   htmlentities($_POST['province']) : null;
    $status          = isset($_POST['status'])                  ?   htmlentities($_POST['status']) : null;
    $date_registered = isset($_POST['date_registered'])         ?   htmlentities($_POST['date_registered']) : null;
    $contact_num = isset($_POST['contact_num'])                 ?   htmlentities($_POST['contact_num']) : null;


    $dataTupad    = [
        "application_id"           => $application_id,

        "applicant_id"    => $applicant_id,
        "first_name"      => $first_name,
        "last_name"       => $last_name,
        "birthdate"       => $birthdate,
        "gender"          => $gender,
        "barangay"        => $barangay,
        "municipality"    => $municipality,
        "province"        => $province,
        "status"          => $status,
        "date_registered" => $date_registered,

    ];
     





    #for 4ps
    $hh_valid_id         = isset($_POST['hh_valid_id'])         ?   htmlentities($_POST['hh_valid_id']) : null;
    $hh_birth_cert       = isset($_POST['hh_birth_cert'])       ?   htmlentities($_POST['hh_birth_cert']) : null;
    $hh_marriage_cert    = isset($_POST['hh_marriage_cert'])    ?   htmlentities($_POST['hh_marriage_cert']) : null;
    $hh_residency_cert   = isset($_POST['hh_residency_cert'])   ?   htmlentities($_POST['hh_residency_cert']) : null;
    $child_birth_cert    = isset($_POST['child_birth_cert'])    ?   htmlentities($_POST['child_birth_cert']) : null;
    $child_school_cert   = isset($_POST['child_school_cert'])   ?   htmlentities($_POST['child_school_cert']) : null;
    $child_health_record = isset($_POST['child_health_record']) ?   htmlentities($_POST['child_health_record']) : null;
    $pregnancy_med_cert  = isset($_POST['pregnancy_med_cert'])  ?   htmlentities($_POST['pregnancy_med_cert']) : null;
    $application_id      = isset($_POST['application_id'])      ?   htmlentities($_POST['application_id']) : null;

    $datafor_ps          = [
        "hh_valid_id"         => $hh_valid_id,
        "hh_birth_cert"       => $hh_birth_cert,
        "hh_marriage_cert"    => $hh_marriage_cert,
        "hh_residency_cert"   => $hh_residency_cert,
        "child_birth_cert"    => $child_birth_cert,
        "child_school_cert"   => $child_school_cert,
        "child_health_record" => $child_health_record,
        "pregnancy_med_cert"  => $pregnancy_med_cert,
        "application_id"      => $application_id,
    ];



    #UPDATE STATUS

    date_default_timezone_set('Asia/Manila');
    $currentDateTime = date('Y-m-d H:i:s');

    $status = isset($_POST['status']) ? htmlentities($_POST['status']) : null;
    $amount = isset($_POST['amount']) ? htmlentities($_POST['amount']) : null;

    $dataUpdateStatus = [];

    if (strtoupper($status) === "APPROVE") {
        $status = "APPROVED";
        $dataUpdateStatus["date_approved"] = $currentDateTime;
    } else if (strtoupper($status) === "RELEASE") {
        $status = "RELEASED";
        $dataUpdateStatus["date_released"] = $currentDateTime;
    }

    // Add common fields after the condition
    $dataUpdateStatus["application_status"] = $status;
    $dataUpdateStatus["amount"] = $amount;





    if ($action == "insert") {
        // $dataApplication['application_id'] = $application_id;
        $obj->insert('applications', $dataApplication);


        if (strtoupper($application_type) == "EDUCATIONAL SUPPORT") {
            $obj->insert('application_scholarships_appointment', $dataScholarship);
        } else if (strtoupper($application_type) == "TUPAD") {
            $obj->insert('tupad', $dataTupad);
        } else if (strtoupper($application_type) == "4PS") {
            $obj->insert('application_4ps_program', $datafor_ps);
        }
    } else if ($action == "update") {
        $obj->update('applications', $dataApplication, " application_id = '{$application_id}' ");
    } else if ($action == "delete") {
        $obj->delete('applications', " application_id = '{$application_id}' ");
    }



    #UPDATE STATUS
    else if ($action == "update_status") {
        $obj->update('applications', $dataUpdateStatus, " application_id = '{$application_id}' ");
    }


    // Check result and respond accordingly
    $data = $obj->getResult();

    if (isset($data[0]) && $data[0] == 1) {
        echo json_encode([
            'status'  => 1,
            'message' => 'Successfully Request',
        ]);
    } else {
        echo json_encode([
            'status'  => 0,
            'message' => 'Server problem, could not add user',
        ]);
    }
} else {
    echo json_encode([
        'status'  => 0,
        'message' => 'Access denied or invalid request',
    ]);
}