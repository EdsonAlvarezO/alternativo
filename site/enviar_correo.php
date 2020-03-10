<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once './shared/header.php';
require_once './shared/guard.php';
require_once './shared/db.php';
include __DIR__ .  '/templates.php';
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'vendor/autoload.php';
        
        $id_curriculum = $_GET['id_curriculum'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            header("Location: ./template_one.php?id_curriculum=$id_curriculum");
        }
        $info_personal = $con->runQuery('SELECT * FROM curriculums WHERE id_user = $1', [$id_user]);
        $info_contact = $con->runQuery('SELECT * FROM contact WHERE id_curriculum = $1', [$id_curriculum]);
        $info_companys = $con->runQuery('SELECT * FROM companys WHERE id_curriculum = $1', [$id_curriculum]);
        $info_skills = $con->runQuery('SELECT * FROM skills WHERE id_curriculum = $1', [$id_curriculum]);
        $info_hobbies = $con->runQuery('SELECT * FROM hobbies WHERE id_curriculum = $1', [$id_curriculum]);
        $info_degrees = $con->runQuery('SELECT * FROM degrees WHERE id_curriculum = $1', [$id_curriculum]);
        $image = $con->runQuery('SELECT * FROM images WHERE id_user = $1', [$id_user]);
        $info_contributions = $con->runQuery('SELECT * FROM contributions WHERE id_curriculum = $1', [$id_curriculum]);
        $info_projects = $con->runQuery('SELECT * FROM projects WHERE id_curriculum >= $1', [$id_curriculum]);
        $num_template = $_GET['template'];
        $user_gmail = $info_contact[0]['email'];
if($num_template == 1){
    $HTML = getTemplate_One($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects);
    send_email($HTML,$user_gmail);
}else if($num_template == 2){
    $HTML = getTemplate_Two($info_personal,$info_contact,$info_companys,$info_skills,$info_hobbies,$info_degrees,$image,$info_contributions,$info_projects);
    send_email($HTML,$user_gmail);
}
function send_email($HTML,$email){
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   // Enable SMTP authentication
        $mail->Username = 'edsonobando18@gmail.com';                     // SMTP username
        $mail->Password = 'Epato1234';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('edsonobando18@gmail.com', 'edsonobando18');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Prueba';
        $mail->Body    = $HTML;
        $mail->send();
        require 'sended.php';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>