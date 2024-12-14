<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Persona</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="font-sans antialiased bg-[#4263EB]">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl shadow-xl w-full max-w-md overflow-hidden">
            <div class="p-8 lg:p-12">
                <h2 class="text-4xl font-bold text-[#1E1B4B] mb-6 text-center">Login</h2>
                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-[#6B7280] mb-2">Email</label>
                        <div class="relative">
                            <input type="email" name="email" id="email" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-[#4263EB] focus:border-transparent"
                                required>
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-[#6B7280] mb-2">Password</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-[#4263EB] focus:border-transparent"
                                required>
                        </div>
                    </div>
                    <div>
                        <button type="submit" 
                            class="w-full bg-[#4263EB] text-white py-3 rounded-lg hover:bg-[#3451C6] transition duration-300">
                            Login
                        </button>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('persona.auth.register') }}" class="text-[#4263EB] hover:underline">Don't have an account? Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>