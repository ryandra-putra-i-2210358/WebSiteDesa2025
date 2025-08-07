<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css_nav/style.css')}}">
  <!-- Swiper CSS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />

  @vite('resources/tailwind/app.css') <!-- Sesuaikan jika pakai Laravel Vite -->

  <link rel="icon" href="{{ asset('img/logosvg.png') }}" sizes="32x32" type="image/png">

  
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
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  

</body>
</html>
