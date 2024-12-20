<!-- resources/views/layouts/partials/topmenu.blade.php -->
<nav class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="px-4 py-2 flex justify-between items-center relative">
        <!-- Left Section -->
        <div class="flex items-center">
            <!-- Burger Menu -->
            <div class="mr-4 cursor-pointer" id="burgerMenuButton">
                <svg class="h-6 w-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </div>
            <img src="{{ asset('images/apps/persona_icon.png') }}" alt="Persona Logo" class="h-8 w-8 rounded-full mr-2">
            <div class="text-xl font-bold">Persona</div>
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
            <!-- Avatar Placeholder with Dropdown -->
            <div class="relative">
                <!-- <img src="{{ asset('images/placeholder_avatar.png') }}" alt="User Avatar" class="h-8 w-8 rounded-full"> -->
                <div class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center text-white cursor-pointer" id="avatarDropdownButton">
                    <!-- Placeholder for user initials or icon -->
                    <span class="text-sm font-bold">U</span>
                </div>
                <!-- Dropdown Menu -->
                <div id="avatarDropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                    <a href="{{ route('persona.myprofile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">My Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var avatarDropdownButton = document.getElementById('avatarDropdownButton');
        var avatarDropdownMenu = document.getElementById('avatarDropdownMenu');
        var burgerMenuButton = document.getElementById('burgerMenuButton');
        var leftSidebar = document.getElementById('leftSidebar');
        var mainContent = document.getElementById('mainContent');
        var isCollapsed = leftSidebar.classList.contains('collapsed');

        avatarDropdownButton.addEventListener('click', function () {
            avatarDropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function (event) {
            if (!avatarDropdownButton.contains(event.target) && !avatarDropdownMenu.contains(event.target)) {
                avatarDropdownMenu.classList.add('hidden');
            }
        });

        function adjustMainContentWidth() {
            if (isCollapsed) {
                mainContent.style.marginLeft = '50px';
            } else {
                mainContent.style.marginLeft = 'calc(16.6667% + 50px)';
            }
        }

        adjustMainContentWidth();

        burgerMenuButton.addEventListener('click', function () {
            isCollapsed = !isCollapsed;
            leftSidebar.classList.toggle('collapsed');
            leftSidebar.classList.toggle('expanded');
            adjustMainContentWidth();
        });
    });
</script>