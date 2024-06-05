<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased text-gray-900">
    <header class="bg-gray-800 p-4 text-white">
        <nav class="container mx-auto flex justify-between">
            <div>
                <a href="/" class="text-lg font-bold">Fintech</a>
            </div>
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/services" class="hover:underline">Services</a></li>
                <li><a href="/about" class="hover:underline">About Us</a></li>
                <li><a href="/contact" class="hover:underline">Contact Us</a></li>
                <li><a href="/apply-loan" class="hover:underline">Apply for Loan</a></li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto py-8">
        @yield('content')
    </main>

    <footer class="bg-gray-800 p-4 text-white text-center">
        <p>&copy; {{ date('Y') }} Fintech. All rights reserved.</p>
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
