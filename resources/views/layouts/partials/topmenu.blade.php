<!-- resources/views/layouts/partials/topmenu.blade.php -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@php
    if (empty($apps)) {
        $apps = [
            [
                'name' => 'Persona',
                'url' => route('persona.myprofile'),
                'icon_path' => 'images/apps/persona_icon.png',
                'color' => 'blue'
            ],
            [
                'name' => 'TestLab',
                'url' => route('testlab.dashboard'),
                'icon_path' => 'images/apps/testlab_icon.png',
                'color' => 'green'
            ],
            [
                'name' => 'Kerja',
                'url' => route('talent.dashboard'),
                'icon_path' => 'images/apps/talent_icon.png',
                'color' => 'green'
            ],
            [
                'name' => 'Karya',
                'url' => route('talent.dashboard'),
                'icon_path' => 'images/apps/talent_icon.png',
                'color' => 'green'
            ],
            [
                'name' => 'Kelola',
                'url' => route('talent.dashboard'),
                'icon_path' => 'images/apps/talent_icon.png',
                'color' => 'green'
            ],
            [
                'name' => 'Kendali',
                'url' => route('talent.dashboard'),
                'icon_path' => 'images/apps/talent_icon.png',
                'color' => 'green'
            ],
                // Add more sample apps as needed...
        ];
    }
@endphp

<nav class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="px-4 py-2 flex justify-between items-center relative">
        <!-- Left Section -->
        <div class="flex items-center">
            @if (Request::is('persona*'))
                <img src="{{ asset('images/apps/persona_icon.png') }}" alt="Persona Logo" class="h-8 w-8 rounded-full mr-2">
                <div class="text-xl font-bold">Persona</div>
            @elseif (Request::is('testlab*'))
                <img src="{{ asset('images/apps/testlab_icon.png') }}" alt="TestLab Logo" class="h-8 w-8 rounded-full mr-2">
                <div class="text-xl font-bold">TestLab</div>
            @else
                <img src="{{ asset('images/apps/default_icon.png') }}" alt="Default Logo" class="h-8 w-8 rounded-full mr-2">
                <div class="text-xl font-bold">Default</div>
            @endif
        </div>

        <!-- Center Section -->
        <div class="absolute left-1/2 transform -translate-x-1/2">
            <img src="{{ asset('images/diawan_logo_only.png') }}" alt="Diawan Logo" class="h-8">
        </div>

        <!-- Right Section -->
        <div class="flex items-center ml-auto space-x-4">
            <!-- Chat Icon with Badge -->
            <div class="relative">
                <svg class="h-6 w-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 16.5A2.5 2.5 0 0118.5 19H6l-4 4V4.5A2.5 2.5 0 014.5 2h15A2.5 2.5 0 0122 4.5v12z"></path>
                </svg>
                <span class="absolute top-0 right-0 block h-2 w-2 rounded-full ring-2 ring-white bg-red-500"></span>
            </div>
            <!-- Notification Icon with Badge -->
            <div class="relative">
                <svg class="h-6 w-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                </svg>
                <span class="absolute top-0 right-0 block h-2 w-2 rounded-full ring-2 ring-white bg-red-500"></span>
            </div>
            <!-- Apps Icon -->
            <div class="relative">
                <button 
                    id="appLauncherButton"
                    class="p-2 rounded-lg hover:bg-grey-200 hover:text-yellow-500 focus:outline-none focus:ring-2 focus:ring-gray-600"
                    aria-label="Open app launcher"
                >
                    <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4 4h4v4H4V4zm6 0h4v4h-4V4zm6 0h4v4h-4V4zM4 10h4v4H4v-4zm6 0h4v4h-4v-4zm6 0h4v4h-4v-4zM4 16h4v4H4v-4zm6 0h4v4h-4v-4zm6 0h4v4h-4v-4z"/>
                    </svg>
                </button>
                <!-- App Launcher Modal -->
                <div
                    id="appLauncherModal"
                    class="hidden absolute right-0 mt-2 w-screen max-w-md transform px-2 sm:px-0 z-50"
                >
                    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden bg-white">
                        <div class="relative px-5 py-6">
                            <!-- Search Bar -->
                            <div class="mb-6">
                                <div class="relative">
                                    <input 
                                        type="text" 
                                        placeholder="Find apps" 
                                        class="w-full bg-gray-200 text-gray-900 pl-10 pr-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    >
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- Apps Grid -->
                            <div class="grid grid-cols-3 sm:grid-cols-4 gap-6">
                                @forelse($apps as $app)
                                <a 
                                    href="{{ $app['url'] }}" 
                                    class="flex flex-col items-center space-y-2 p-2 rounded-lg hover:bg-gray-200 transition-colors duration-150"
                                >
                                    <!-- App Icon -->
                                    <div class="w-12 h-12 flex items-center justify-center">
                                        @if(isset($app['icon_path']))
                                            <img src="{{ asset($app['icon_path']) }}" alt="{{ $app['name'] }}" class="w-full h-full">
                                        @else
                                            <div class="w-full h-full rounded-lg bg-{{ $app['color'] ?? 'blue' }}-500 flex items-center justify-center">
                                                <span class="text-white text-xl font-bold">{{ substr($app['name'], 0, 1) }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <!-- App Name -->
                                    <span class="text-sm text-gray-900 text-center">{{ $app['name'] }}</span>
                                </a>
                                @empty
                                <!-- Example Data -->
                                <a 
                                    href="#" 
                                    class="flex flex-col items-center space-y-2 p-2 rounded-lg hover:bg-gray-200 transition-colors duration-150"
                                >
                                    <div class="w-12 h-12 flex items-center justify-center bg-blue-500 rounded-lg">
                                        <span class="text-white text-xl font-bold">E</span>
                                    </div>
                                    <span class="text-sm text-gray-900 text-center">Example</span>
                                </a>
                                @endforelse
                                <!-- More Apps Button -->
                                <a 
                                    href="{{ route('apps.index') }}" 
                                    class="flex flex-col items-center space-y-2 p-2 rounded-lg hover:bg-gray-200 transition-colors duration-150"
                                >
                                    <div class="w-12 h-12 flex items-center justify-center border-2 border-gray-600 rounded-lg">
                                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-gray-900 text-center">More apps</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Avatar Placeholder with Dropdown -->
            <div class="relative">
                <!-- <img src="{{ asset('images/placeholder_avatar.png') }}" alt="User Avatar" class="h-8 w-8 rounded-full"> -->
                <div class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center text-white cursor-pointer" id="avatarDropdownButton">
                    <!-- Placeholder for user initials or icon -->
                    <span class="text-sm font-bold">U</span>
                </div>
                <!-- Dropdown Menu -->
                <div id="avatarDropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                    <a href="{{ route('persona.myprofile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    <a href="{{ route('persona.account') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Account</a>
                    <a href="{{ route('persona.billing') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Billing</a>
                    <button id="logout-btn" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var avatarDropdownButton = document.getElementById('avatarDropdownButton');
        var avatarDropdownMenu = document.getElementById('avatarDropdownMenu');
        var appLauncherButton = document.getElementById('appLauncherButton');
        var appLauncherModal = document.getElementById('appLauncherModal');

        avatarDropdownButton.addEventListener('click', function () {
            avatarDropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function (event) {
            if (!avatarDropdownButton.contains(event.target) && !avatarDropdownMenu.contains(event.target)) {
                avatarDropdownMenu.classList.add('hidden');
            }
            if (!appLauncherButton.contains(event.target) && !appLauncherModal.contains(event.target)) {
                appLauncherModal.classList.add('hidden');
            }
        });

        appLauncherButton.addEventListener('click', function () {
            appLauncherModal.classList.toggle('hidden');
        });

        // Ensure jQuery is available before using it
        if (typeof $ !== 'undefined') {
            $('#logout-btn').on('click', function (e) {
                e.preventDefault();

                // Get the token from localStorage
                let token = localStorage.getItem('token');

                if (!token) {
                    alert('You are not logged in.');
                    return;
                }

                // Make API call to logout
                $.ajax({
                    url: "http://127.0.0.1:8000/api/logout", // Replace with your API endpoint
                    type: "POST",
                    headers: {
                        Authorization: `Bearer ${token}`
                    },
                    success: function (response) {
                        // Clear the token from localStorage
                        localStorage.removeItem('token');

                        // Redirect to the login page
                        window.location.href = "{{ route('persona.auth.login') }}";
                    },
                    error: function (xhr) {
                        alert('Error during logout. Please try again.');
                    }
                });
            });
        } else {
            console.error("jQuery is not loaded. Please include jQuery before this script.");
        }
    });
</script>