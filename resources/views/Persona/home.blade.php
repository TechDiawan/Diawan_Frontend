<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Persona: Your Single Identity Across Diawan</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="font-sans antialiased">
    <!-- Top fixed menu bar -->
    <nav class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <button id="burger-menu" class="lg:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <div class="hidden lg:flex space-x-4">
                <!-- Add your main menu items here -->
                <a href="#" class="text-gray-700 hover:text-gray-900">Home</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Features</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">How It Works</a>
            </div>
            <div class="flex-1 text-center">
                <img src="{{ asset('images/diawan-logo.png') }}" alt="Diawan Logo" class="h-8 mx-auto">
            </div>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-700 hover:text-gray-900">Sign In</a>
                <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Sign Up</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-20 bg-gradient-to-r from-blue-500 to-purple-600 text-white min-h-screen flex items-center">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <h1 class="text-4xl lg:text-6xl font-bold mb-4 animate-fade-in">Persona: Your Single Identity Across Diawan</h1>
                    <p class="text-xl mb-8 animate-fade-in">Simplify your experience with a unified identity to manage your activities, billing, and more within Diawan.</p>
                    <a href="#" class="bg-white text-blue-500 px-8 py-3 rounded-full text-lg font-semibold hover:bg-blue-100 transition duration-300 animate-pulse">Create Your Persona Now</a>
                </div>
                <div class="lg:w-1/2">
                    <div class="relative">
                        <!-- Replace with your actual illustration or animation -->
                        <img src="{{ asset('images/persona-dashboard.png') }}" alt="Persona Dashboard" class="w-full rounded-lg shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Why Choose Persona?</h2>
            <div class="flex flex-wrap -mx-4">
                @php
                $features = [
                    ['icon' => 'key', 'title' => 'Single Sign-On (SSO)', 'description' => 'Seamlessly access all Diawan services with one login.'],
                    ['icon' => 'user', 'title' => 'Profile Management', 'description' => 'Update and customize your personal and business details.'],
                    ['icon' => 'credit-card', 'title' => 'Billing and Payments', 'description' => 'Handle transactions effortlessly.'],
                    ['icon' => 'chart-bar', 'title' => 'Activity Tracking', 'description' => 'Monitor your usage and interactions within Diawan.'],
                    ['icon' => 'lock', 'title' => 'Secure and Private', 'description' => 'Your data is encrypted and protected.'],
                ];
                @endphp

                @foreach ($features as $feature)
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-md p-6 h-full transition duration-300 hover:shadow-lg">
                        <div class="text-4xl text-blue-500 mb-4">
                            <i class="fas fa-{{ $feature['icon'] }}"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ $feature['title'] }}</h3>
                        <p class="text-gray-600">{{ $feature['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">How Does Persona Work?</h2>
            <div class="flex flex-wrap -mx-4">
                @php
                $steps = [
                    ['number' => '1', 'title' => 'Register Your Persona', 'description' => 'Sign up and create your unique identity.'],
                    ['number' => '2', 'title' => 'Connect to Diawan Services', 'description' => 'Use SSO to access all Diawan features.'],
                    ['number' => '3', 'title' => 'Manage Your Activities', 'description' => 'Easily control your profile, billing, and payments.'],
                ];
                @endphp

                @foreach ($steps as $step)
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="text-center">
                        <div class="inline-block bg-blue-500 text-white rounded-full w-12 h-12 flex items-center justify-center text-2xl font-bold mb-4">
                            {{ $step['number'] }}
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ $step['title'] }}</h3>
                        <p class="text-gray-600">{{ $step['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">What Our Users Say</h2>
            <div class="flex flex-wrap -mx-4">
                @php
                $testimonials = [
                    ['name' => 'Alex', 'role' => 'Freelancer', 'content' => 'Persona makes managing my Diawan activities so simple and secure!'],
                    ['name' => 'Mira', 'role' => 'Small Business Owner', 'content' => 'With Persona, I can handle billing and payments seamlessly in one place.'],
                ];
                @endphp

                @foreach ($testimonials as $testimonial)
                <div class="w-full md:w-1/2 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <p class="text-gray-600 mb-4">"{{ $testimonial['content'] }}"</p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gray-300 rounded-full mr-4"></div>
                            <div>
                                <h4 class="font-semibold">{{ $testimonial['name'] }}</h4>
                                <p class="text-gray-500">{{ $testimonial['role'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Unlock the Full Potential of Diawan</h2>
            <div class="flex flex-wrap -mx-4">
                @php
                $benefits = [
                    ['title' => 'Time-Saving', 'description' => 'One login for everything.'],
                    ['title' => 'Ease of Use', 'description' => 'Intuitive interface for seamless management.'],
                    ['title' => 'Enhanced Security', 'description' => 'Protect your data with advanced encryption.'],
                ];
                @endphp

                @foreach ($benefits as $benefit)
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="text-center">
                        <h3 class="text-xl font-semibold mb-2">{{ $benefit['title'] }}</h3>
                        <p class="text-gray-600">{{ $benefit['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-500 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Start Your Journey with Persona Today!</h2>
            <p class="text-xl mb-8">Take control of your Diawan experience with a single, powerful identity.</p>
            <a href="#" class="bg-white text-blue-500 px-8 py-3 rounded-full text-lg font-semibold hover:bg-blue-100 transition duration-300">Sign Up for Persona Now</a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
            <div class="max-w-3xl mx-auto">
                @php
                $faqs = [
                    ['question' => 'What is Persona?', 'answer' => 'Persona is a feature within Diawan that provides a single identity for users across all Diawan services.'],
                    ['question' => 'Is Persona secure?', 'answer' => 'Yes, Persona uses advanced encryption to protect your data and ensure secure access to all Diawan services.'],
                    ['question' => 'Can I use Persona for all Diawan services?', 'answer' => 'Persona is designed to work seamlessly with all Diawan services, providing a unified experience.'],
                ];
                @endphp

                @foreach ($faqs as $faq)
                <div class="mb-4 border-b border-gray-200 pb-4">
                    <button class="flex justify-between items-center w-full text-left">
                        <span class="text-lg font-semibold">{{ $faq['question'] }}</span>
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mt-2 hidden">
                        <p class="text-gray-600">{{ $faq['answer'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/3 mb-8 md:mb-0">
                    <img src="{{ asset('images/diawan-logo-white.png') }}" alt="Diawan Logo" class="h-8 mb-4">
                    <p class="text-sm">Diawan: Empowering your digital journey with Persona.</p>
                </div>
                <div class="w-full md:w-1/3 mb-8 md:mb-0">
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-300">Terms & Conditions</a></li>
                        <li><a href="#" class="hover:text-blue-300">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-blue-300">Support</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/3">
                    <h4 class="text-lg font-semibold mb-4">Connect With Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 text-center text-sm">
                <p>&copy; 2023 Diawan. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            // Burger menu toggle
            $('#burger-menu').click(function() {
                $('.lg\\:flex').toggleClass('hidden');
            });

            // FAQ accordion
            $('.faq button').click(function() {
                $(this).next('.hidden').slideToggle();
                $(this).find('svg').toggleClass('rotate-180');
            });

            // Smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            });

            // Animate elements on scroll
            $(window).scroll(function() {
                $('.animate-fade-in').each(function() {
                    var elementTop = $(this).offset().top;
                    var elementBottom = elementTop + $(this).outerHeight();
                    var viewportTop = $(window).scrollTop();
                    var viewportBottom = viewportTop + $(window).height();
                    
                    if (elementBottom > viewportTop && elementTop < viewportBottom) {
                        $(this).addClass('fade-in');
                    }
                });
            });
        });
    </script>
</body>
</html>