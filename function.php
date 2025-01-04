<?php
include('db_connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'mail.wideawakecommunity.co.uk'; // Set the SMTP server to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@wideawakecommunity.co.uk'; // SMTP username
    $mail->Password   = 'Default@123'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('info@wideawakecommunity.co.uk', 'Mailer');
    $mail->addAddress('abdulrafay99910@gmail.com', 'Wide Awake Community'); // Add a recipient

    // Attachments
	// var_dump($_FILES);
    $first_name=$_POST['first_name'] ?? '';
    $last_name=$_POST['last_name'] ?? '';
    $stage_name=$_POST['stage_name'] ?? '';
    $dob=$_POST['dob'] ?? '';
    $country=$_POST['country'] ?? '';
    $nationality=$_POST['nationality'] ?? '';
    $other_nationality_1=$_POST['other-nationality-1'] ?? '';
    $other_nationality_2=$_POST['other-nationality-2'] ?? '';
    $other_nationality_3=$_POST['other-nationality-3'] ?? '';
    $email=$_POST['email'] ?? '';
    $address=$_POST['address'] ?? '';
    $country_code=$_POST['country_code'] ?? '';
    $number=$_POST['number'] ?? '';
    $website=$_POST['website'] ?? '';
    $tiktok=$_POST['tiktok'] ?? '';
    $meta=$_POST['meta'] ?? '';
    $instagram=$_POST['instagram'] ?? '';
    $thread=$_POST['threads'] ?? '';
    $snapchat=$_POST['snapchat'] ?? '';
    $twitter=$_POST['twitter'] ?? '';
    $weibo=$_POST['weibo'] ?? '';
    $soundcloud=$_POST['soundcloud'] ?? '';
    $bandcamp=$_POST['bandcamp'] ?? '';
    $pinterest=$_POST['pinterest'] ?? '';
    $twitch = $_POST['twitch'] ?? '';
    $linkedin=$_POST['linkedin'] ?? '';
    $youtube=$_POST['youtube'] ?? '';
    $vimeo=$_POST['vimeo'] ?? '';
    $question_1 = $_POST['question_1'] ?? '';
    $question_2 = $_POST['question_2'] ?? '';
    $question_3 = $_POST['question_3'] ?? '';
    $question_4 = $_POST['question_4'] ?? '';
    $question_5 = $_POST['question_5'] ?? '';
    $question_6 = $_POST['question_6'] ?? '';
    $are_you = $_POST['are_you'] ?? '';
    $school = $_POST['schoolName'] ?? '';
    $events = $_POST['events'] ?? '';
    $status = $_POST['status'] ?? '';

    $file_attachment=null;

    
    
    if (!empty($_FILES['file-upload']['name'][0])) {

        // Loop through each uploaded file
        for ($i = 0; $i < count($_FILES['file-upload']['name']); $i++) {
            // Get the file details
            $file_name = $_FILES['file-upload']['name'][$i];
            $file_tmp = $_FILES['file-upload']['tmp_name'][$i];
            $file_type = $_FILES['file-upload']['type'][$i];
            
            // Read the file contents
            $file_content = file_get_contents($file_tmp);
            
            // Add the image as an embedded attachment
            $cid = $mail->addStringEmbeddedImage($file_content, $file_name, $file_name, 'base64', $file_type);
            
            // Embed the image into the email body
            $mail->Body .= '<img src="cid:' . $cid . '">';
    
            // Save the file to the assets/documents folder
            $destination = 'assets/documents/' . $file_name;
            $file_attachment = $file_name;
            move_uploaded_file($file_tmp, $destination);
        }

    }else{

    }

    $sql = "INSERT INTO `forms`(`first_name`, `last_name`, `stage_name`, `dob`, `country`, `nationality`, `other_nationality_1`, `other_nationality_2`, `other_nationality_3`, `email`, `address`, `country_code`, `number`, `website`, `tiktok`, `meta`, `instagram`, `threads`, `snapchat`, `twitter`, `weibo`, `soundcloud`, `bandcamp`, `pinterest`, `twitch`, `linkedin`, `youtube`, `vimeo`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `are_you`, `school` ,`events`, `file_upload` ,`status`) VALUES ('$first_name','$last_name','$stage_name','$dob','$country','$nationality','$other_nationality_1','$other_nationality_2','$other_nationality_3','$email','$address','$country_code','$number','$website','$tiktok','$meta','$instagram','$thread','$snapchat','$twitter','$weibo','$soundcloud','$bandcamp','$pinterest','$twitch','$linkedin','$youtube','$vimeo','$question_1','$question_2','$question_3','$question_4','$question_5','$question_6','$are_you','$school','$events','$file_attachment','$status')";

    $result = $conn->query($sql);
    

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Form Submission';

    $bodyContent = '<h1>Form Submission Details</h1>';
    foreach ($_POST as $key => $value) {
        $bodyContent .= "<p><strong>$key:</strong> $value</p>";
    }
    $mail->Body    = $bodyContent;

    $mail->send();
    header('Location: thankyou.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>
