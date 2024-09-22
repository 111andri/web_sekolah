<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    {{-- style css --}}
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>

    </style>
</head>

<body>

    <!-- Sidebar -->
    <x-sidebar></x-sidebar>
    <!-- Content -->
    <div class="content">
        <!-- Dashboard Section -->
        <section id="dashboard">
            {{ $slot }}
        </section>


        <!-- Bootstrap JS and dependencies -->
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }} "></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
