<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Application Security - Assignment 01</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp { from { opacity:0; transform:translateY(20px); } to { opacity:1; transform:translateY(0); } }
        .animate-in { animation: fadeInUp 0.8s ease forwards; }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">
    <div class="max-w-4xl w-full mx-auto p-8">
        <div class="bg-white text-black p-10 rounded-3xl shadow-2xl animate-in" style="animation-delay: 0.2s;">
            <h1 class="text-4xl font-bold text-center mb-8 text-red-600">ITP4416 Web Application Security - Assignment 01</h1>
            
            <!-- Student Info Box -->
            <div class="border-4 border-red-600 p-8 rounded-2xl mb-10 text-center">
                <h2 class="text-3xl font-bold mb-2">Web Application Security - Assignment 01</h2>
                <p class="text-2xl"><strong>Name: Fung Henry</strong></p>
                <p class="text-2xl"><strong>Student ID: 240299896</strong></p>
                <p class="text-2xl"><strong>Class: HDCS-PTE/2/2A</strong></p>
            </div>

            <!-- Vulnerable Ping -->
            <h3 class="text-2xl mb-4 text-amber-400">Vulnerable Host Check (Command Injection)</h3>
            <form action="ping.php" method="post" class="bg-gray-100 p-6 rounded-2xl mb-8">
                <div class="flex gap-4 items-end">
                    <div class="flex-1">
                        <label class="block text-sm mb-1">Host (Check Alive):</label>
                        <input type="text" name="host" value="8.8.8.8" class="w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-4 focus:ring-amber-300">
                    </div>
                    <div>
                        <label class="block text-sm mb-1">No of PING:</label>
                        <select name="num" class="px-4 py-3 border rounded-xl">
                            <option value="1">ONE</option>
                            <option value="4">FOUR</option>
                        </select>
                    </div>
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-2xl font-bold transition transform hover:scale-105 active:scale-95">Submit</button>
                </div>
            </form>

            <!-- Secure Ping -->
            <h3 class="text-2xl mb-4 text-green-400">Secure Host Check (Command Injection Fixed)</h3>
            <form action="secure_ping.php" method="post" class="bg-gray-100 p-6 rounded-2xl mb-12">
                <div class="flex gap-4 items-end">
                    <div class="flex-1">
                        <label class="block text-sm mb-1">Host (Check Alive):</label>
                        <input type="text" name="host" value="8.8.8.8" class="w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-4 focus:ring-green-300">
                    </div>
                    <div>
                        <label class="block text-sm mb-1">No of PING:</label>
                        <select name="num" class="px-4 py-3 border rounded-xl">
                            <option value="1">ONE</option>
                            <option value="4">FOUR</option>
                        </select>
                    </div>
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-2xl font-bold transition transform hover:scale-105 active:scale-95">Submit</button>
                </div>
            </form>

            <div class="flex justify-center gap-8 text-xl">
                <a href="login.php" class="text-red-500 hover:underline flex items-center">→ Vulnerable Login (SQLi)</a>
                <a href="secure_login.php" class="text-green-500 hover:underline flex items-center">→ Secure Login (Fixed)</a>
            </div>
        </div>
    </div>
</body>
</html>