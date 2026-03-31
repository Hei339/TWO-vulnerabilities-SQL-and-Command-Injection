<?php
$user = isset($_GET['user']) ? htmlspecialchars($_GET['user']) : 'Guest';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp { from { opacity:0; transform:translateY(30px); } to { opacity:1; transform:translateY(0); } }
        .animate-in { animation: fadeInUp 0.8s ease forwards; }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">
    <div class="max-w-2xl w-full mx-auto bg-white text-black rounded-3xl shadow-2xl p-10 animate-in">
        <h1 class="text-4xl font-bold text-center mb-6 text-green-600">🎉 Welcome to Dashboard!</h1>
        
        <div class="bg-green-100 border border-green-400 text-green-800 px-6 py-4 rounded-2xl mb-8 text-center text-xl">
            ✅ You are successfully logged in as: <strong><?= $user ?></strong><br>
            <span class="text-sm">(This page is only reachable after successful login / SQL Injection)</span>
        </div>

        <!-- Fake Dashboard Content -->
        <div class="grid grid-cols-2 gap-6 mb-10">
            <div class="bg-gray-100 p-6 rounded-2xl">
                <h3 class="font-bold text-lg mb-2">📊 User Information</h3>
                <p><strong>Name:</strong> Fung Henry</p>
                <p><strong>Student ID:</strong> 240299896</p>
                <p><strong>Class:</strong> HDCS-PTE/2/2A</p>
            </div>
            <div class="bg-gray-100 p-6 rounded-2xl">
                <h3 class="font-bold text-lg mb-2">🔒 Security Status</h3>
                <p class="text-green-600">✅ SQL Injection Protected (if you came from secure_login)</p>
                <p class="text-red-600">⚠️ Vulnerable (if you came from login.php via SQLi)</p>
            </div>
        </div>

        <div class="text-center space-x-6">
            <a href="index.php" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-2xl font-bold">← Back to Home</a>
            <a href="login.php" class="inline-block bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-2xl font-bold">Logout (Vulnerable Login)</a>
        </div>
    </div>
</body>
</html>