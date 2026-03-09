<?php
require '../config/db.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer
require_once __DIR__ . '/../PHP-Mailer-master/src/PHPMailer.php';
require_once __DIR__ . '/../PHP-Mailer-master/src/SMTP.php';
require_once __DIR__ . '/../PHP-Mailer-master/src/Exception.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = trim($_POST['firstname']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    // Validate passwords
    if ($password !== $confirm) {
        $message = "Passwords do not match!";
    } else {

        try {
            // Check if username or email exists
            $check = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
            $check->execute([$username, $email]);

            if ($check->fetch()) {
                $message = "Username or email already exists!";
            } else {
                // Hash password
                $hash = password_hash($password, PASSWORD_DEFAULT);

                // Insert new user
                $stmt = $conn->prepare("
                    INSERT INTO users 
                    (firstname, username, email, phone, address, dob, password, status, role)
                    VALUES (?, ?, ?, ?, ?, ?, ?, 'pending', 'user')
                ");
                $stmt->execute([
                    $firstname,
                    $username,
                    $email,
                    $phone,
                    $address,
                    $dob,
                    $hash
                ]);

                $message = "Registration successful! Wait for admin approval.";

                // ----------------------------
                // PHPMailer - Notify Admin
                // ----------------------------
                $mail = new PHPMailer(true);
                try {
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'antoniosteven664@gmail.com'; // admin email
                    $mail->Password = 'wfkvjdceytyqzujq'; // app password
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;

                    // Bypass SSL verification (for localhost/testing)
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );

                    $mail->setFrom('antoniosteven664@gmail.com', 'Upstaff System');
                    $mail->addAddress('antoniosteven664@gmail.com'); // admin email receiver

                    $mail->isHTML(true);
                    $mail->Subject = 'New User Registration Pending Approval';
                    $mail->Body = "
                        <h3>New User Registration</h3>
                        <p><strong>Username:</strong> {$username}</p>
                        <p><strong>First Name:</strong> {$firstname}</p>
                        <p><strong>Email:</strong> {$email}</p>
                        <p>Login to the admin panel to approve this user.</p>
                    ";

                    $mail->send();
                    // Optional: log success
                    // error_log("Admin notified of new user: {$username}");

                } catch (Exception $e) {
                    // Optional: log email error
                    error_log("PHPMailer error: {$mail->ErrorInfo}");
                }
            }

        } catch (PDOException $e) {
            $message = "Database error: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Upstaff Register</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center">

<!-- Register Card -->
<div class="bg-white shadow-xl rounded-2xl w-full max-w-md p-8 sm:p-10">

  <!-- Header -->
  <div class="text-center mb-8">
    <h2 class="text-gray-700 text-lg font-semibold">Create Account</h2>
    <p class="text-gray-500 text-sm mt-1">Register to access your Upstaff account</p>
  </div>

  <!-- PHP Message -->
  <?php if ($message): ?>
  <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
    <?php echo htmlspecialchars($message); ?>
  </div>
  <?php endif; ?>

  <!-- Register Form -->
  <form method="POST" id="registerForm" class="space-y-5">

    <div class="grid sm:grid-cols-2 gap-4">

      <!-- First Name -->
      <div>
        <label class="text-gray-700 text-sm font-medium mb-1 block">First Name</label>
        <input name="firstname" type="text" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#0d47a1] focus:border-transparent transition"
          placeholder="Enter your first name" />
      </div>

      <!-- Username -->
      <div>
        <label class="text-gray-700 text-sm font-medium mb-1 block">Username</label>
        <input name="username" type="text" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#0d47a1] focus:border-transparent transition"
          placeholder="Enter a username" />
      </div>

      <!-- Email -->
      <div>
        <label class="text-gray-700 text-sm font-medium mb-1 block">Email</label>
        <input name="email" type="email" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#0d47a1] focus:border-transparent transition"
          placeholder="Enter your email" />
      </div>

      <!-- Phone -->
      <div>
        <label class="text-gray-700 text-sm font-medium mb-1 block">Phone</label>
        <input name="phone" type="text" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#0d47a1] focus:border-transparent transition"
          placeholder="Enter your phone number" />
      </div>

      <!-- Password -->
      <div>
        <label class="text-gray-700 text-sm font-medium mb-1 block">Password</label>
        <input name="password" id="password" type="password" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#0d47a1] focus:border-transparent transition"
          placeholder="Enter a password" />
      </div>

      <!-- Confirm Password -->
      <div>
        <label class="text-gray-700 text-sm font-medium mb-1 block">Confirm Password</label>
        <input name="confirm_password" id="confirm_password" type="password" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#0d47a1] focus:border-transparent transition"
          placeholder="Confirm password" />
      </div>

      <!-- Address (full width) -->
      <div class="sm:col-span-2">
        <label class="text-gray-700 text-sm font-medium mb-1 block">Address</label>
        <input name="address" type="text" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#0d47a1] focus:border-transparent transition"
          placeholder="Enter your address" />
      </div>

      <!-- Date of Birth -->
      <div class="sm:col-span-2">
        <label class="text-gray-700 text-sm font-medium mb-1 block">Date of Birth</label>
        <input name="dob" type="date" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#0d47a1] focus:border-transparent transition" />
      </div>

    </div>

    <!-- Register Button -->
    <div class="text-center mt-6">
      <button type="submit"
        class="w-full py-3 rounded-lg text-white font-medium text-sm tracking-wide bg-gradient-to-r from-[#0d47a1] to-[#08306b] hover:from-[#08306b] hover:to-[#0a2d5b] transition">
        Register Account
      </button>
    </div>

    <!-- Login Link -->
    <p class="text-gray-500 text-sm text-center mt-4">
      Already have an account?
      <a href="../login/login.php" class="text-[#0d47a1] font-medium hover:underline">Sign in</a>
    </p>

  </form>

</div>

<script>
document.getElementById('registerForm').addEventListener('submit', function(e){
  const pass = document.getElementById('password').value;
  const confirm = document.getElementById('confirm_password').value;
  if(pass !== confirm){
    e.preventDefault();
    alert("Passwords do not match");
  }
});
</script>

</body>
</html>