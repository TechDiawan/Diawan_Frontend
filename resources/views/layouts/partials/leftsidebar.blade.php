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
        <a title="My profile" href="{{ route('persona.myprofile') }}" class="flex items-center p-2 hover:bg-gray-200 rounded-md mt-2 {{ request()->routeIs('persona.myprofile') ? 'active-menu' : '' }}">
            <div class="flex text-center">
                <i class="mx-1 my-4 fas fa-lg fa-id-badge {{ request()->routeIs('persona.myprofile') ? 'text-f7ec03' : 'text-gray-700' }}"></i>
            </div>
            <span class="ml-2 menu-label {{ request()->routeIs('persona.myprofile') ? 'text-f7ec03' : 'text-gray-700' }}">My Profile</span>
        </a>
        <a title="My competency" href="{{ route('persona.competency') }}" class="flex items-center p-2 hover:bg-gray-200 rounded-md mt-2 {{ request()->routeIs('persona.competency') ? 'active-menu' : '' }}">
            <div class="flex text-center">
                <i class="mx-1 my-4 fas fa-lg fa-user-ninja {{ request()->routeIs('persona.competency') ? 'text-f7ec03' : 'text-gray-700' }}"></i>
            </div>
            <span class="ml-2 menu-label {{ request()->routeIs('persona.competency') ? 'text-f7ec03' : 'text-gray-700' }}">My Competency</span>
        </a>
        <a title="My project" href="{{ route('persona.projects') }}" class="flex items-center p-2 hover:bg-gray-200 rounded-md mt-2 {{ request()->routeIs('persona.projects') ? 'active-menu' : '' }}">
            <div class="flex text-center">
                <i class="mx-1 my-4 fas fa-lg fa-shapes {{ request()->routeIs('persona.projects') ? 'text-f7ec03' : 'text-gray-700' }}"></i>
            </div>
            <span class="ml-2 menu-label {{ request()->routeIs('persona.projects') ? 'text-f7ec03' : 'text-gray-700' }}">My Projects</span>
        </a>
    </div>
</aside>