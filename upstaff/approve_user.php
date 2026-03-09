<?php
// Start session safely
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include database
require_once __DIR__ . '/config/db.php'; // adjust path if approve_user.php is in root

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer
require_once __DIR__ . '/PHP-Mailer-master/src/PHPMailer.php';
require_once __DIR__ . '/PHP-Mailer-master/src/SMTP.php';
require_once __DIR__ . '/PHP-Mailer-master/src/Exception.php';

// Check if user is admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    echo "Unauthorized";
    exit();
}

// Get user ID from POST
if (!isset($_POST['id'])) {
    echo "No user ID provided";
    exit();
}

$id = $_POST['id'];

try {
    // Fetch user email and info
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "User not found";
        exit();
    }

    // Update status to approved
    $update = $conn->prepare("UPDATE users SET status = 'approved' WHERE id = ?");
    $update->execute([$id]);

    // Send email to the user
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'antoniosteven664@gmail.com'; // admin email
        $mail->Password = 'wfkvjdceytyqzujq';          // app password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Bypass SSL verification for localhost
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->setFrom('antoniosteven664@gmail.com', 'Upstaff System');
        $mail->addAddress($user['email']); // user email

        $mail->isHTML(true);
        $mail->Subject = 'Your Upstaff Account Has Been Approved';
        $mail->Body = "
            <h3>Hello {$user['firstname']},</h3>
            <p>Your Upstaff account has been approved by the admin.</p>
            <p>You can now login with your username: <strong>{$user['username']}</strong></p>
            <p><a href='http://localhost/upstaff/login/login.php'>Login Here</a></p>
            <br>
            <p>Thank you,<br>Upstaff Team</p>
        ";

        $mail->send();
        echo "success";

    } catch (Exception $e) {
        error_log("PHPMailer Error: {$mail->ErrorInfo}");
        echo "approved_no_email"; // status approved but email failed
    }

} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}