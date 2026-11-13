<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Akun - {{ config('app.name') }}</title>
    <!-- SB Admin 2 CSS -->
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Fontawesome untuk ikon -->
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
    <!-- Diperlebar menggunakan col-lg-8 col-xl-7 -->
    <div class="container min-vh-100 d-flex justify-content-center align-items-center py-5">
        <div class="col-md-10 col-lg-8 col-xl-7">

            <div class="card shadow-lg border-left-primary">
                <div class="card-body p-5">

                    <!-- Header / Logo Text -->
                    <div class="text-center mb-4">
                        <div class="icon-circle bg-primary text-white mx-auto mb-3 shadow-sm d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px; border-radius: 50%;">
                            <i class="fas fa-user-plus fa-lg"></i>
                        </div>
                        <h4 class="font-weight-bold text-dark">Daftar Akun</h4>
                        <p class="text-muted small">Lengkapi data di bawah ini untuk mendaftarkan akun petugas baru</p>
                    </div>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="row">
                            <!-- Nama Petugas -->
                            <div class="col-md-6 form-group mb-3">
                                <label for="nama_petugas" class="form-label font-weight-bold small text-secondary">Nama
                                    Petugas</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light border-right-0"><i
                                                class="fas fa-id-card text-muted"></i></span>
                                    </div>
                                    <input type="text"
                                        class="form-control border-left-0 @error('nama_petugas') is-invalid @enderror"
                                        id="nama_petugas" name="nama_petugas" value="{{ old('nama_petugas') }}"
                                        placeholder="Masukkan nama lengkap" required autofocus>
                                    @error('nama_petugas')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Username -->
                            <div class="col-md-6 form-group mb-3">
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
                                        placeholder="Masukkan username" required>
                                    @error('username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Jabatan -->
                            <div class="col-md-6 form-group mb-4">
                                <label for="jabatan"
                                    class="form-label font-weight-bold small text-secondary">Jabatan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light border-right-0"><i
                                                class="fas fa-briefcase text-muted"></i></span>
                                    </div>
                                    <input type="text"
                                        class="form-control border-left-0 @error('jabatan') is-invalid @enderror"
                                        id="jabatan" name="jabatan" value="{{ old('jabatan') }}"
                                        placeholder="Masukkan jabatan" required>
                                    @error('jabatan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="col-md-6 form-group mb-4">
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
                        </div>

                        <!-- Tombol Daftar -->
                        <button type="submit"
                            class="btn btn-primary btn-user btn-block py-2 font-weight-bold shadow-sm">
                            <i class="fas fa-user-check mr-1"></i> Daftar
                        </button>
                    </form>

                </div>

                <!-- Footer Card / Link Login -->
                <div class="card-footer bg-white text-center py-3 border-0 rounded-bottom">
                    <p class="small text-muted mb-0">Sudah punya akun?
                        <a href="{{ route('login') }}" class="font-weight-bold text-primary text-decoration-none">Login
                            disini</a>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
