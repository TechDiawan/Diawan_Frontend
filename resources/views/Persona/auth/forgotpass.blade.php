<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Persona</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="font-sans antialiased bg-[#4263EB]">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl shadow-xl w-full max-w-6xl overflow-hidden">
            <div class="grid md:grid-cols-2">
                <!-- Left Column - Illustration -->
                <div class="hidden md:block bg-[#F5F7FF] p-12">
                    <div class="h-full flex flex-col">
                        <!-- Logo -->
                        <div class="mb-8">
                            <img src="{{ asset('images/diawan_horizontal_with_text.png') }}" alt="Diawan Logo" class="h-8">
                        </div>
                        
                        <!-- Illustration -->
                        <div class="flex-1 flex items-center justify-center">
                            <img src="{{ asset('images/illustration/forgotpass.jpg') }}" 
                                alt="Forgot Password Illustration" 
                                class="w-full max-w-lg"
                                onerror="this.src='https://via.placeholder.com/500x400?text=Forgot+Password'">
                        </div>
                    </div>
                </div>

                <!-- Right Column - Form -->
                <div class="p-8 lg:p-12">
                    <!-- Forgot Password Form -->
                    <div class="mb-8">
                        <h3 class="text-[#6B7280] text-sm font-medium mb-2">RESET YOUR PASSWORD</h3>
                        <h1 class="text-4xl font-bold text-[#1E1B4B] mb-4">Forgot Password</h1>
                        <p class="text-[#6B7280]">
                            Remember your password? 
                            <a href="{{ route('persona.auth.login') }}" class="text-[#4263EB] hover:underline">Sign In</a>
                        </p>
                    </div>

                    <form action="{{ route('persona.auth.forgotpass') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-[#6B7280] mb-2">E-Mail</label>
                            <div class="relative">
                                <input type="email" name="email" id="email" 
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-[#4263EB] focus:border-transparent"
                                    placeholder="youremail@gmail.com"
                                    required>
                                <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <!-- Reset Password Button -->
                        <button type="submit" 
                            class="w-full bg-[#4263EB] text-white py-3 rounded-lg hover:bg-[#3451C6] transition duration-300">
                            SEND RESET PASSWORD REQUEST
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Form validation
            $('form').submit(function(event) {
                const email = $('#email').val();
                
                if (!email) {
                    event.preventDefault();
                    alert('Please fill in the email field.');
                }
            });
        });
    </script>
</body>
</html>
