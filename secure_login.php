<?php
$conn = new mysqli("localhost", "root", "", "websec");
if ($conn->connect_error) die("DB error");

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Fixed: Use prepared statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header("Location: dashboard.php?user=" . urlencode($user));
        exit;
    } else {
        $msg = "<h2 class='text-red-600 animate-bounce'>❌ Login Failed.</h2>";
    }
    $stmt->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp { from { opacity:0; transform:translateY(30px); } to { opacity:1; transform:translateY(0); } }
        .animate-in { animation: fadeInUp 0.8s ease forwards; }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-auto bg-white text-black rounded-3xl shadow-2xl p-10 animate-in">
        <h1 class="text-3xl font-bold text-center mb-8 text-green-600">Secure Login Page (SQL Injection Fixed)</h1>
        
        <?php if(isset($msg)) echo $msg; ?>

        <form method="post" class="space-y-6">
            <div>
                <label class="block text-sm mb-2">Username</label>
                <input type="text" name="username" class="w-full px-5 py-4 border border-gray-300 rounded-2xl focus:outline-none focus:ring-4 focus:ring-green-300 transition" placeholder="admin">
            </div>
            <div>
                <label class="block text-sm mb-2">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" 
                           class="w-full px-5 py-4 border border-gray-300 rounded-2xl focus:outline-none focus:ring-4 focus:ring-green-300 transition" placeholder="password123">
                    <button type="button" onclick="togglePassword()" 
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-700 text-2xl">Show</button>
                </div>
            </div>
            <button type="submit" name="login" 
                    class="w-full bg-green-600 hover:bg-green-700 text-white py-4 rounded-2xl font-bold text-lg transition transform hover:scale-105 active:scale-95">
                Login
            </button>
        </form>
        
        <a href="index.php" class="block text-center mt-8 text-blue-600 hover:underline">← Back to Home</a>
    </div>

    <script>
        function togglePassword() {
            const pwd = document.getElementById('password');
            const btn = document.querySelector('button[onclick="togglePassword()"]');
            if (pwd.type === 'password') {
                pwd.type = 'text';
                btn.textContent = 'Show';
            } else {
                pwd.type = 'password';
                btn.textContent = 'Show';
            }
        }
    </script>
</body>
</html>