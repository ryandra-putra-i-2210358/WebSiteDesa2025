<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('img/logosvg.png') }}" type="image/png">

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


  <footer class="bg-gray-900 text-white text-sm pt-10">
    @yield('footer')
  </footer>


  <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>


  

</body>
</html>
