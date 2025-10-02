<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Allow JSON requests
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// Function to send an email
function sendEmail($to, $subject, $message) {
    $mail = new PHPMailer(true);
    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'buenahenry391@gmail.com'; // Your Gmail address
        $mail->Password   = 'qerx lalw vufk ewyq';  // App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Email Details
        $mail->setFrom('buenahenry391@gmail.com', 'no-reply');
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->isHTML(true);

        // Send email
        if ($mail->send()) {
            return ["status" => "success", "message" => "Email sent successfully"];
        } else {
            return ["status" => "error", "message" => "Failed to send email"];
        }
    } catch (Exception $e) {
        return ["status" => "error", "message" => "Mailer Error: " . $mail->ErrorInfo];
    }
}


?>
