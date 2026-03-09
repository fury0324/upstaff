<?php
session_start();
require_once __DIR__ . '/../config/db.php';

$message = "";

if (isset($_GET['error'])) {
    $message = $_GET['error'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {

            if (password_verify($password, $user['password'])) {

                if ($user['status'] === "approved") {

                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['firstname'] = $user['firstname'];
                    $_SESSION['role'] = $user['role'];

                    // Redirect based on role
                    if ($user['role'] === 'admin') {
                        header("Location: admin_approval.php");
                    } else {
                        header("Location: dashboard.php");
                    }
                    exit();

                } elseif ($user['status'] === "pending") {
                    header("Location: login.php?error=" . urlencode("Account pending approval"));
                    exit();
                } else {
                    header("Location: login.php?error=" . urlencode("Account rejected"));
                    exit();
                }

            } else {
                header("Location: login.php?error=" . urlencode("Invalid password"));
                exit();
            }

        } else {
            header("Location: login.php?error=" . urlencode("Username not found"));
            exit();
        }

    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Upstaff Login</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-xl rounded-2xl w-full max-w-md p-8 sm:p-10">

    <!-- Logo & Heading -->
    <div class="text-center mb-8">
        <a href="javascript:void(0)">
        </a>
        <h2 class="text-gray-700 text-lg font-semibold">Welcome Back</h2>
        <p class="text-gray-500 text-sm mt-1">Sign in to your Upstaff account</p>
    </div>

    <!-- Error Message -->
    <?php if ($message): ?>
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
        <?php echo htmlspecialchars($message); ?>
    </div>
    <?php endif; ?>

    <!-- Login Form -->
    <form action="login.php" method="POST" class="space-y-5">

        <!-- Username -->
        <div>
            <label class="text-gray-700 text-sm font-medium mb-2 block">Username</label>
            <input name="username" type="text" required
                class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#0d47a1] focus:border-transparent transition"
                placeholder="Enter your username" />
        </div>

        <!-- Password -->
        <div>
            <label class="text-gray-700 text-sm font-medium mb-2 block">Password</label>
            <input name="password" type="password" required
                class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-gray-50 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#0d47a1] focus:border-transparent transition"
                placeholder="Enter your password" />
        </div>

        <!-- Remember & Forgot -->
        <div class="flex items-center justify-between text-sm">
            <label class="flex items-center text-gray-600">
                <input type="checkbox" class="mr-2 rounded border-gray-300 focus:ring-2 focus:ring-[#0d47a1]">
                Remember me
            </label>
            <a href="#" class="text-[#0d47a1] hover:underline">Forgot password?</a>
        </div>

        <!-- Sign In Button -->
        <button type="submit"
            class="w-full py-3 rounded-lg text-white font-medium text-sm tracking-wide bg-gradient-to-r from-[#0d47a1] to-[#08306b] hover:from-[#08306b] hover:to-[#0a2d5b] transition">
            Sign In
        </button>

        <!-- Register Link -->
        <p class="text-gray-500 text-sm text-center mt-4">
            Don’t have an account?
            <a href="register.php" class="text-[#0d47a1] hover:underline font-medium">Register here</a>
        </p>

    </form>
</div>
</body>
</html>