<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Petugas - {{ config('app.name') }}</title>
    <!-- SB Admin 2 CSS -->
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Fontawesome untuk ikon (opsional tapi disarankan) -->
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fc 0%, #e3e6f0 100%);
        }

        .card {
            border: none;
            border-radius: 1rem;
        }

        .border-left-primary {
            border-left: 0.35rem solid #4e73df !important;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Diperlebar menggunakan col-lg-7 col-xl-5 -->
    <div class="container min-vh-100 d-flex justify-content-center align-items-center py-5">
        <div class="col-sm-9 col-md-7 col-lg-7 col-xl-5">

            <!-- Notifikasi Sukses Registrasi -->
            @if (session('success_register'))
                <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                    <i class="fas fa-check-circle mr-1"></i> {{ session('success_register') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card shadow-lg border-left-primary">
                <div class="card-body p-5">

                    <!-- Header / Logo Text -->
                    <div class="text-center mb-4">
                        <div class="icon-circle bg-primary text-white mx-auto mb-3 shadow-sm d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px; border-radius: 50%;">
                            <i class="fas fa-user-shield fa-lg"></i>
                        </div>
                        <h4 class="font-weight-bold text-dark">Masuk Petugas</h4>
                        <p class="text-muted small">Silakan masukkan akun Anda untuk melanjutkan</p>
                    </div>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <!-- Username -->
                        <div class="form-group mb-3">
                            <label for="username"
                                class="form-label font-weight-bold small text-secondary">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-light border-right-0"><i
                                            class="fas fa-user text-muted"></i></span>
                                </div>
                                <input type="text"
                                    class="form-control border-left-0 @error('username') is-invalid @enderror"
                                    id="username" name="username" value="{{ old('username') }}"
                                    placeholder="Masukkan username" required autofocus>
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group mb-4">
                            <label for="password"
                                class="form-label font-weight-bold small text-secondary">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-light border-right-0"><i
                                            class="fas fa-lock text-muted"></i></span>
                                </div>
                                <input type="password"
                                    class="form-control border-left-0 @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Masukkan password" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Tombol Login -->
                        <button type="submit"
                            class="btn btn-primary btn-user btn-block py-2 font-weight-bold shadow-sm">
                            <i class="fas fa-sign-in-alt mr-1"></i> Login
                        </button>
                    </form>

                </div>

                <!-- Footer Card / Link Register -->
                <div class="card-footer bg-white text-center py-3 border-0 rounded-bottom">
                    <p class="small text-muted mb-0">Belum punya akun?
                        <a href="{{ route('register') }}"
                            class="font-weight-bold text-primary text-decoration-none">Daftar disini</a>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap core JavaScript (Opsional jika dibutuhkan untuk dismiss alert) -->
    <script src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
