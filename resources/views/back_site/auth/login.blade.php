<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- Bootstrap CDN --}}
  <link rel="stylesheet" href="{{ asset('css_nav/style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      overflow: hidden;
    }
    .login-wrapper {
      display: flex;
      height: 100vh;
      width: 100%;
    }
    .login-left, .login-right {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .login-left {
      background: #fff;
      padding: 60px;
      order: 2; /* default mobile urutan bawah */
    }
    .login-left h3 {
      font-weight: 700;
      margin-bottom: 10px;
    }
    .form-control {
      border-radius: 50px;
      padding: 14px 20px;
      border: none;
      box-shadow: 0 0 10px rgba(0, 204, 255, 0.3);
      margin-bottom: 40px;
      transition: all 0.3s ease;
      width: 500px;
    }
    .form-control:focus {
      box-shadow: 0 0 15px rgba(0, 204, 255, 0.7);
    }
    .btn-login {
      border-radius: 50px;
      padding: 12px;
      background: linear-gradient(to right, #2563eb, #14b8a6, #10b981);
      border: none;
      font-weight: 600;
      letter-spacing: 1px;
      transition: 0.3s;
    }
    .btn-login:hover {
      opacity: 0.9;
    }
    .login-options {
      font-size: 14px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .login-options a {
      text-decoration: none;
      color: #0072ff;
      font-weight: 500;
    }
    .login-right {
      position: relative;
      flex: 1;
      color: white;
      text-align: center;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background: linear-gradient(to right, #2563eb, #14b8a6, #10b981);
      overflow: hidden;
      order: 1; /* default mobile urutan atas */
    }
    .login-right::before {
      position: absolute;
      inset: 0;
      background-image: radial-gradient(rgba(255,255,255,0.15) 1px, transparent 1px);
      background-size: 16px 16px;
      z-index: 0;
    }
    .login-right * {
      position: relative;
      z-index: 1;
    }

    /* Responsive */
    @media(min-width: 992px) {
      body {
        overflow: hidden;
      }
      .login-wrapper {
        flex-direction: row;
      }
      .login-left {
        order: 1; /* desktop normal: kiri */
        padding: 60px;
      }
      .login-right {
        order: 2; /* desktop normal: kanan */
        padding: 40px;
      }
    }

    @media(max-width: 992px) {
      body {
        overflow: auto;
      }
      .login-wrapper {
        flex-direction: column;
        height: auto;
      }
      .form-control {
        width: 400px; /* biar rapi di mobile */
      }
    }
  </style>
</head>
<body>
  <div class="login-wrapper">
    <!-- Left (Form) -->
    <div class="login-left">
      <h3 class="text-center">Hello Admin!! </h3>
      <p class="text-center text-muted mb-4">Sign into your account</p>

      {{-- Error Message --}}
      @if ($errors->any())
        <div class="alert alert-danger">
          {{ $errors->first() }}
        </div>
      @endif

      {{-- Success Message --}}
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif

      <form method="POST" action="{{ url('/login') }}">
        @csrf
        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>

        <div class="d-grid">
          <button type="submit" class="btn btn-login text-white">SIGN IN</button>
        </div>
      </form>
    </div>

    <!-- Right (Welcome) -->
    <div class="login-right">
      <img src="{{ asset('img/logosvg.png') }}" alt="Logo Desa" class="mb-4" style="height:80px;">
      <h2>Welcome Back!</h2>
      <p>
        Selamat datang kembali di Sistem Informasi Desa Tajur Halang.
        Silakan masuk menggunakan akun admin Anda untuk mengelola data, informasi, dan layanan yang tersedia demi kemudahan pelayanan kepada masyarakat.
      </p>
    </div>
  </div>
</body>
</html>
