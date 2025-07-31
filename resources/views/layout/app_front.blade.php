<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/tailwind/app.css') <!-- Sesuaikan jika pakai Laravel Vite -->
</head>

<body class="font-sans text-gray-800">

  <!-- Navbar -->
    
  @yield('navbar')

  <!-- Hero Section -->

  <main class="min-h-screen">
    <div>
      @yield('content')
    </div>
  </main>

  

</body>
</html>
