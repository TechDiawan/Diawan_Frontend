<!-- resources/views/layouts/fullbar.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Persona</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased bg-gray-100">
    <!-- Fixed Top Menu -->
    <div class="bg-white">
        @includeIf('layouts.partials.topmenu')
    </div>

    <div class="flex pt-16">
        <!-- Left Sidebar -->
        <div class="bg-gray-300 bg-opacity-30">
            @includeIf('layouts.partials.leftsidebar')
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-h-screen bg-gray-100 bg-opacity-10">
            <main class="flex-1 p-4">
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
</body>
</html>