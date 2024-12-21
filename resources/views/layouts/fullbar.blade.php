<!-- resources/views/layouts/fullbar.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Persona</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="font-sans antialiased bg-gray-100">
    <!-- Fixed Top Menu -->
    <div class="bg-white">
        @includeIf('layouts.partials.topmenu')
    </div>

    <div class="flex pt-16">
        <!-- Left Sidebar -->
        <div id="leftSidebarContainer" class="bg-gray-300 bg-opacity-30 transition-all duration-300 ease-in-out collapsed">
            @includeIf('layouts.partials.leftsidebar')
        </div>

        <!-- Main Content -->
        <div id="mainContent" class="flex-1 flex flex-col min-h-screen bg-gray-100 bg-opacity-10 transition-all duration-300 ease-in-out">
            <main class="flex-1 p-1">
                @yield('content')
            </main>

            <!-- Thin Footer -->
            <div class="bg-gray-800 bg-opacity-80">
                @includeIf('layouts.partials.footer')
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="bg-gray-300 bg-opacity-30">
            @includeIf('layouts.partials.rightsidebar')
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var leftSidebar = document.getElementById('leftSidebarContainer');
            var mainContent = document.getElementById('mainContent');
            var isCollapsed = leftSidebar.classList.contains('collapsed');

            function adjustMainContentWidth() {
                if (isCollapsed) {
                    mainContent.style.marginLeft = '50px';
                } else {
                    mainContent.style.marginLeft = 'calc(16.6667% + 50px)';
                }
            }

            adjustMainContentWidth();

            document.getElementById('burgerMenuButton').addEventListener('click', function () {
                isCollapsed = !isCollapsed;
                leftSidebar.classList.toggle('collapsed');
                leftSidebar.classList.toggle('expanded');
                adjustMainContentWidth();
            });
        });
    </script>
</body>
</html>