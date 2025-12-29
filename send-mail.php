<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name    = htmlspecialchars($_POST['name'] ?? '');
    $phone   = htmlspecialchars($_POST['phone'] ?? '');
    $email   = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $country = htmlspecialchars($_POST['country'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    try {

        // ADMIN MAIL
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'himanshig934@gmail.com';
        $mail->Password   = 'cdwwvqkvqukqptbz'; // Use app password if 2FA enabled
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom('noreply@hitakari.com', 'Website Enquiry');
        $mail->addAddress('himanshig934@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <h3>New Enquiry</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Country:</strong> $country</p>
            <p><strong>Message:</strong> $message</p>
        ";

        $mail->send();

        // USER MAIL
        $userMail = new PHPMailer(true);
        $userMail->isSMTP();
        $userMail->Host       = 'smtp.gmail.com';
        $userMail->SMTPAuth   = true;
        $userMail->Username   = 'himanshig934@gmail.com';
        $userMail->Password   = 'cdwwvqkvqukqptbz'; // Use app password if 2FA enabled
        $userMail->SMTPSecure = 'ssl';
        $userMail->Port       = 465;

        $userMail->setFrom('noreply@hitakari.com', 'Hitakari');
        $userMail->addAddress($email);

        $userMail->isHTML(true);
        $userMail->Subject = 'Thank you for contacting us';
        $userMail->Body = "
            <p>Hi <b>$name</b>,</p>
            <p>Thank you for contacting Hitakari.</p>
            <p>We will get back to you shortly.</p>
        ";

        $userMail->send();

        header('Location: index.php');
        exit;

    } catch (Exception $e) {
        error_log('Mail Error: ' . $e->getMessage());
        echo "Mail error. Please try later.";
    }
}
