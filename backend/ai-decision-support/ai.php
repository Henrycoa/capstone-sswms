<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");


// 🔹 Get the JSON request body
$input = json_decode(file_get_contents("php://input"), true);

if (!$input) {
    echo json_encode(["error" => "Invalid JSON data."]);
    exit();
}

// 🔹 Extract Data
$age = $input["age"] ?? null;
$income = $input["income"] ?? null;
$employment_status = $input["employment_status"] ?? null;
$health_condition = $input["health_condition"] ?? null;
$family_status = $input["family_status"] ?? null;

if (is_null($age) || is_null($income) || is_null($employment_status) || is_null($health_condition) || is_null($family_status)) {
    echo json_encode(["error" => "Missing required fields."]);
    exit();
}

// ✅ Eligibility Logic (Modify as needed)
$eligibility = ($age >= 18 && $income < 20000 && $employment_status == 0 && $health_condition == 1) ? "Eligible" : "Not Eligible";
$explanation = ($eligibility === "Eligible") ? "You qualify due to low income and health condition." : "Your current status does not meet the criteria.";

// 🔹 Return JSON Response
echo json_encode([
    "eligibility" => $eligibility,
    "explanation" => $explanation
]);
