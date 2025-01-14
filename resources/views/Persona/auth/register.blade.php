<!-- resources/views/persona-register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Persona</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
</head>
<body class="font-sans antialiased bg-[#4263EB]">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl shadow-xl w-full max-w-6xl overflow-hidden">
            <div class="grid md:grid-cols-2">
                <!-- Left Column - Form -->
                <div class="p-8 lg:p-12">
                    <!-- Language Selector
                    <div class="mb-8">
                        <button class="inline-flex items-center px-4 py-2 rounded-lg bg-gray-100 text-sm text-gray-600">
                            <span class="mr-2">🌐</span>
                            English (US)
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div> -->
                    <h2 class="text-2xl font-bold mb-6">Create your account</h2>
                    <form id="register-form" action="{{ route('persona.auth.handleRegister') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Email</label>
                            <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700">Password</label>
                            <div class="relative">
                                <input type="password" name="password" id="password" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </span>
                                <div id="password-strength" class="mt-2 text-sm"></div>
                            </div>
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                            <div class="relative">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </span>
                            </div>
                            @error('password_confirmation')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="terms" class="form-checkbox" required>
                                <span class="ml-2">I agree to the <a href="#" class="text-blue-500 hover:underline">Terms of Service</a> and <a href="#" class="text-blue-500 hover:underline">Privacy Policy</a></span>
                            </label>
                        </div>
                        <div class="mb-4">
                            <button type="submit" id="register-btn" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Register</button>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('persona.auth.login') }}" class="text-blue-500 hover:underline">Already have an account? Sign In</a>
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
                            <img src="{{ asset('images/illustration/signup.jpg') }}" 
                                alt="Registration Illustration" 
                                class="w-full"
                                onerror="this.src='https://via.placeholder.com/500x400?text=Welcome+to+Persona'">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#password').on('input', function() {
                var password = $(this).val();
                var result = zxcvbn(password);
                var strengthText;
                var strengthColor;

                switch (result.score) {
                    case 0:
                        strengthText = 'Very Weak';
                        strengthColor = 'text-red-500';
                        break;
                    case 1:
                        strengthText = 'Weak';
                        strengthColor = 'text-orange-500';
                        break;
                    case 2:
                        strengthText = 'Fair';
                        strengthColor = 'text-yellow-500';
                        break;
                    case 3:
                        strengthText = 'Good';
                        strengthColor = 'text-green-500';
                        break;
                    case 4:
                        strengthText = 'Strong';
                        strengthColor = 'text-blue-500';
                        break;
                }

                $('#password-strength').text('Password Strength: ' + strengthText).removeClass().addClass(strengthColor);
            });

            $('#register-form').on('submit', function(e) {
                var password = $('#password').val();
                var passwordConfirmation = $('#password_confirmation').val();

                if (password !== passwordConfirmation) {
                    e.preventDefault();
                    alert('Passwords do not match.');
                }
            });

            $('#register-btn').on('click', function (e) {
                e.preventDefault();

                // Clear error messages
                $('.text-red-500').text('');

                // Get form data
                let formData = {
                    user_name: $('#name').val(),
                    user_email: $('#email').val(),
                    user_password: $('#password').val(),
                    user_password_confirmation: $('#password_confirmation').val(),
                    terms: $('input[name="terms"]').is(':checked'),
                };

                // Validate terms checkbox locally before making the API call
                if (!formData.terms) {
                    alert('You must agree to the terms and conditions.');
                    return;
                }

                // Make API call for registration
                $.ajax({
                    url: "http://127.0.0.1:8000/api/register", // Replace with your API endpoint
                    type: "POST",
                    contentType: "application/json", // Ensure JSON content type
                    data: JSON.stringify(formData), // Convert data to JSON string
                    success: function (response) {
                        // If registration is successful, login the user automatically
                        let loginData = {
                            user_email: formData.user_email,
                            user_password: formData.user_password,
                        };

                        $.ajax({
                            url: "http://127.0.0.1:8000/api/login", // Login API endpoint
                            type: "POST",
                            contentType: "application/json",
                            data: JSON.stringify(loginData),
                            success: function (loginResponse) {
                                // Store the token in localStorage
                                localStorage.setItem('token', loginResponse.access_token);

                                // Redirect to the profile page or desired location
                                window.location.href = "{{ route('persona.myprofile') }}";
                            },
                            error: function (xhr) {
                                alert('Registration successful, but failed to log in. Please log in manually.');
                                window.location.href = "{{ route('persona.auth.login') }}";
                            }
                        });
                    },
                    error: function (xhr) {
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            // Display validation errors
                            $.each(xhr.responseJSON.errors, function (key, value) {
                                $(`#error-${key}`).text(value[0]);
                            });
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>