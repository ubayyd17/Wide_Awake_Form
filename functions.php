<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = $_POST['name'] ?? '';
    $preferredName = $_POST['address'] ?? ''; 
    $dob = $_POST['dob'] ?? '';
    $country = $_POST['country'] ?? '';
    $nationality = $_POST['post'] ?? '';
    $otherNationalities = $_POST['area'] ?? ''; 
    $email = $_POST['email'] ?? '';
    $physicalAddress = $_POST['address'] ?? '';
    $phoneNumber = $_POST['number'] ?? '';
    $smHandles = $_POST['sm_handles'] ?? '';
    $website = $_POST['website'] ?? '';
    $artistType = $_POST['question_1'] ?? '';
    $otherMediums = $_POST['question_2'] ?? '';
    $aboutYourself = $_POST['question_3'] ?? '';
    $whyJoin = $_POST['question_4'] ?? '';
    $contribution = $_POST['question_5'] ?? '';
    $profile = $_POST['question_6'] ?? '';
    $howHeard = $_POST['question_7'] ?? '';
    $eventAttendance = $_POST['question_8'] ?? '';

    // Email content
    $body = "Name: $name\n";
    $body .= "Preferred Name: $preferredName\n";
    $body .= "Date of Birth: $dob\n";
    $body .= "Country: $country\n";
    $body .= "Nationality: $nationality\n";
    $body .= "Other Nationalities: $otherNationalities\n";
    $body .= "Email: $email\n";
    $body .= "Physical Address: $physicalAddress\n";
    $body .= "Phone Number: $phoneNumber\n";
    $body .= "Social Media Handles: $smHandles\n";
    $body .= "Website: $website\n";
    $body .= "Artist Type: $artistType\n";
    $body .= "Other Mediums: $otherMediums\n";
    $body .= "About Yourself: $aboutYourself\n";
    $body .= "Why Join: $whyJoin\n";
    $body .= "Contribution: $contribution\n";
    $body .= "Profile: $profile\n";
    $body .= "How Heard: $howHeard\n";
    $body .= "Event Attendance: $eventAttendance\n";

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'progsportsdev.com'; // Set the SMTP server to send through
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreply@progsportsdev.com'; // SMTP username
        $mail->Password   = 'Pass@Email1234'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('noreply@progsportsdev.com', 'Mailer');
        $mail->addAddress('noreply@progsportsdev.com', 'Recipient Name'); 
        //Content
        $mail->isHTML(false);
        $mail->Subject = 'Form Submission';
        $mail->Body = $body;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
