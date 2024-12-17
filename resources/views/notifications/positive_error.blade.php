<!-- resources/views/notifications/positive_error.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positive Error Notification - Persona</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-diawan-logo {
            position: relative;
        }
        .bg-diawan-logo::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ asset('images/diawan_logo_only.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.3; /* 30% transparency */
        }
    </style>
</head>
<body class="font-sans antialiased bg-[#4263EB]">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl shadow-xl w-full max-w-6xl overflow-hidden">
            <div class="p-8 lg:p-12 text-center max-h-screen overflow-y-auto bg-diawan-logo">
                <h1 class="text-2xl font-bold mb-4">{{ $errorName }}</h1>
                <p class="text-lg mb-4">{{ $message }}</p>
                <img src="{{ asset($errorImage) }}" alt="{{ $errorName }}" class="mb-4 max-w-xs mx-auto h-auto max-h-64">
                <p class="text-sm text-gray-500">Error Code: {{ $errorCode }}</p>
            </div>
        </div>
    </div>
</body>
</html>