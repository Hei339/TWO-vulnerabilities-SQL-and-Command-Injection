<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = $_POST['host'];
    $num  = $_POST['num'];

    // Fixed: Sanitize inputs to prevent Command Injection
    $safe_host = escapeshellarg($host);
    $safe_num  = intval($num);

    $command = "ping -n " . $safe_num . " " . $safe_host;
    $output  = shell_exec($command);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Ping</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp { from { opacity:0; transform:translateY(30px); } to { opacity:1; transform:translateY(0); } }
        .animate-in { animation: fadeInUp 0.8s ease forwards; }
        .terminal {
            font-family: 'Courier New', monospace;
            animation: typing 1s steps(40, end);
            white-space: pre-wrap;
        }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">
    <div class="max-w-2xl w-full mx-auto bg-white text-black rounded-3xl shadow-2xl p-10 animate-in">
        <h1 class="text-3xl font-bold text-center mb-8 text-green-600">Secure Host Check (Command Injection Fixed)</h1>
        
        <?php if (isset($output)): ?>
            <div class="bg-gray-900 text-green-400 p-6 rounded-2xl mb-8 terminal">
                <strong>Ping Result (Fixed &amp; Secure):</strong><br>
                <?= htmlspecialchars($output) ?>
            </div>
        <?php endif; ?>

        <form action="secure_ping.php" method="post" class="space-y-6">
            <div class="flex gap-4 items-end">
                <div class="flex-1">
                    <label class="block text-sm mb-2">Host (Check Alive):</label>
                    <input type="text" name="host" value="8.8.8.8" 
                           class="w-full px-5 py-4 border border-gray-300 rounded-2xl focus:outline-none focus:ring-4 focus:ring-green-300 transition">
                </div>
                <div>
                    <label class="block text-sm mb-2">No of PING:</label>
                    <select name="num" class="px-5 py-4 border border-gray-300 rounded-2xl">
                        <option value="1">ONE</option>
                        <option value="4">FOUR</option>
                    </select>
                </div>
                <button type="submit" 
                        class="bg-green-600 hover:bg-green-700 text-white px-10 py-4 rounded-2xl font-bold transition transform hover:scale-105 active:scale-95">
                    Submit
                </button>
            </div>
        </form>

        <a href="index.php" class="block text-center mt-8 text-blue-600 hover:underline">← Back to Home</a>
    </div>
</body>
</html>