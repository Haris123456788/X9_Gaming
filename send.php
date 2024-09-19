<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Load Composer's autoloader
    require 'PhpMailer/Exception.php';
    require 'PhpMailer/PHPMailer.php';
    require 'PhpMailer/SMTP.php';

    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'waseemharis1122@gmail.com'; // SMTP username
        $mail->Password = 'jtqa qiwn hhvv nnvk'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
        $mail->Port = 465; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        // Recipients
        $mail->setFrom($email, $name); // Set the sender email and name
        $mail->addAddress('hariswaseem334@gmail.com'); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Contact Form Details';
        $mail->Body = "
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; color: #333; }
                    .container { width: 80%; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
                    .header { background-color: #f4f4f4; padding: 10px; border-bottom: 1px solid #ddd; }
                    .content { margin-top: 20px; }
                    .footer { margin-top: 20px; font-size: 0.9em; color: #666; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <div class='header'>
                        <h2> Submission Details</h2>
                    </div>
                    <div class='content'>
                        <p><strong>Sender Name:</strong> $name</p>
                        <p><strong>Sender Email:</strong> $email</p>
                        <p><strong>Message:</strong></p>
                        <p>$message</p>
                    </div>
                    
                </div>
            </body>
            </html>
        ";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
