<style>
    #leftSidebar.collapsed {
        width: 50px; /* 50px */
    }
    #leftSidebar.expanded {
        width: 16.6667%; /* Approximately 1/6 of the total screen width */
    }
    #leftSidebar.collapsed .menu-label {
        display: none;
    }
    .active-menu {
        background-color: #36539f;
        color: #f7ec03; /* Text color for active menu */
    }
    .active-menu:hover {
        color: black; /* Text color on hover */
    }
</style>

<!-- resources/views/layouts/partials/leftsidebar.blade.php -->
<aside id="leftSidebar" class="bg-gray-300 fixed top-0 left-0 bottom-0 pt-16 transform transition-all duration-300 ease-in-out collapsed">
    <div class="p-1">
        <!-- Left sidebar content goes here -->
        <a href="{{ route('persona.myprofile') }}" class="flex items-center p-2 hover:bg-gray-200 rounded-md mt-2 {{ request()->routeIs('persona.myprofile') ? 'active-menu' : '' }}">
            <div class="w-12 flex justify-center">
                <svg class="h-6 w-6 {{ request()->routeIs('persona.myprofile') ? 'text-f7ec03' : 'text-gray-700' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196zM12 12a3 3 0 100-6 3 3 0 000 6z"></path>
                </svg>
            </div>
            <span class="ml-2 menu-label {{ request()->routeIs('persona.myprofile') ? 'text-f7ec03' : 'text-gray-700' }}">My Profile</span>
        </a>
        <a href="{{ route('persona.competency') }}" class="flex items-center p-2 hover:bg-gray-200 rounded-md mt-2 {{ request()->routeIs('persona.competency') ? 'active-menu' : '' }}">
            <div class="w-12 flex justify-center">
                <svg class="h-6 w-6 {{ request()->routeIs('persona.competency') ? 'text-f7ec03' : 'text-gray-700' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7v-6m0 6l-9-5m9 5l9-5m-9 5V8"></path>
                </svg>
            </div>
            <span class="ml-2 menu-label {{ request()->routeIs('persona.competency') ? 'text-f7ec03' : 'text-gray-700' }}">Competency</span>
        </a>
    </div>
</aside>