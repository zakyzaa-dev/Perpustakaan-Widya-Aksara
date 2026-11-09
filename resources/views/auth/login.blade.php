<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - Login Petugas</title>
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
    <!-- Tambahkan min-vh-100 di sini agar tingginya memenuhi satu layar penuh -->
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-5 col-lg-4">

            @if (session('success_register'))
                <div class="alert alert-success">
                    {{ session('success_register') }}
                </div>
            @endif

            <div class="card shadow border-left-primary border-0 rounded-3" style="width: 350px">
                <div class="card-body p-4">
                    <h4 class="card-title text-center font-weight-bold mb-4 text-dark">Masuk Akun</h4>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <!-- Username -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email"
                                required autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Masukkan password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">Login</button>
                    </form>
                </div>
                <p class="small text-center">Belum punya akun? <a href="{{ route('register') }}"
                        class="font-weight-bold text-decoration-none">Daftar
                        disini</a></p>
            </div>
        </div>
    </div>
</body>

</html>
