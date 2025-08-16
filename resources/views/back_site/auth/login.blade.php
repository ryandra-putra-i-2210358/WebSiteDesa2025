<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .login-wrapper {
            min-height: 100vh;
        }
        .login-image {
            background-image: url('{{ asset('img/tanah.jpg') }}'); /* Ganti dengan path gambar kamu */
            background-size: cover;
            background-position: center;
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
        }
        .login-form-container {
            padding: 40px;
            background: white;
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
        }
        @media (max-width: 768px) {
            .login-image {
                display: none;
            }
            .login-form-container {
                border-radius: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center login-wrapper">
        <div class="row w-100" style="max-width: 900px;">
            <div class="col-md-6 login-image"></div>

            <div class="col-md-6 login-form-container">
                <h3 class="text-center mb-4">Login Admin</h3>

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
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Ingat saya</label>
                        </div>
                        
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
