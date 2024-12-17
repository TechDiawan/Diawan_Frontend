<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Persona</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased bg-[#4263EB]">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl shadow-xl w-full max-w-6xl overflow-hidden">
            <div class="grid md:grid-cols-2">
                <!-- Left Column - Form -->
                <div class="p-8 lg:p-12">
                    <h2 class="text-2xl font-bold mb-6">Reset Your Password</h2>
                    <form action="{{ route('persona.auth.handleResetPassword') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="mb-4">
                            <label for="token" class="block text-gray-700">Token</label>
                            <input type="text" name="token" id="token" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $token }}" required readonly>
                            @error('token')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700">New Password</label>
                            <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="block text-gray-700">Confirm New Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            @error('password_confirmation')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Reset Password</button>
                        </div>
                    </form>
                </div>

                <!-- Right Column - Illustration -->
                <div class="hidden md:block bg-[#F5F7FF] p-12">
                    <div class="h-full flex items-center justify-center">
                        <div class="relative w-full max-w-lg">
                            <!-- Logo -->
                            <div class="mb-8">
                                <img src="{{ asset('images/diawan_horizontal_with_text.png') }}" alt="Diawan Logo" class="h-8">
                            </div>
                            
                            <!-- Illustration -->
                            <img src="{{ asset('images/illustration/resetpass.jpg') }}" 
                                alt="Reset Password Illustration" 
                                class="w-full"
                                onerror="this.src='https://via.placeholder.com/500x400?text=Reset+your+password'">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
