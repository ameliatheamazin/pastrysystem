<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name',"Cest Bon Bakery")}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://bootswatch.com/5/minty/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <style>
    </style>

</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#e5aa70">
        <div class="container-fluid">
            {{-- This section were to merge --> link for each href and the title display . use session to toogle? --}}
            <a class="navbar-brand" href="/admin">Cest Bon Pastry</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/order">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">User</a>
                    </li>
                </ul>
            </div>
            {{-- This section were to merge --> link for each href and the title display --}}
        </div>

    </nav>
    <main class="container">
        @yield('content')
    </main>
</body>

</html>