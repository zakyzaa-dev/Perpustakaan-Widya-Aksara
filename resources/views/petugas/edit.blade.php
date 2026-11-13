<x-layouts.app title="Tambah Petugas">
    <h3 class="mt-3 text-dark mb-1">Edit Petugas</h3>
    <p class="text-muted small">Mengedit data petugas baru untuk akses sistem Perpustakaan Widya Aksara.</p>

    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 text-primary fw-bold">Form Edit Petugas</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('petugas.update', $petuga->id_petugas) }}" method="post">
                @csrf
                @method('PUT')
                {{-- INPUT NAMA BANG INI CEUNAHH --}}
                <div class="mb-3">
                    <label for="nama_petugas" class="form-label mb-1">Nama Petugas</label>
                    <input type="text" name="nama_petugas" id="nama_petugas"
                        class="form-control @error('nama_petugas')  is-invalid @enderror" placeholder="Kim Minji"
                        required value="{{ old('nama_petugas', $petuga->nama_petugas) }}" maxlength="100">
                    @error('nama_petugas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- INPUT USERNAME SAMS JABATAN --}}
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-6 col-12 mb-3">
                            <label for="username" class="form-label mb-1">Username</label>
                            <input type="text" name="username" id="username"
                                class="form-control @error('username') is-invalid @enderror" placeholder="kumaminji"
                                required value="{{ old('username', $petuga->username) }}" maxlength="50">
                            @error('username')
                                <div class="invalid-feedbak">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="jabatan" class="form-label mb-1">Jabatan</label>
                            <input type="text" name="jabatan" id="jabatan"
                                class="form-control @error('jabatan') is-invalid @enderror"
                                placeholder="Kepala Pundak Lutut Kaki" required
                                value="{{ old('jabatan', $petuga->jabatan) }}" maxlength="50">
                            @error('jabatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12 mb-3">
                            <label for="email" class="form-label mb-1">Email</label>
                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="kumaminji@perpustakaan.com" value="{{ old('email', $petuga->email) }}"
                                maxlength="50">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="password" class="form-label mb-1">Password</label>
                            <input type="text" name="password" id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="jakasembungbawagolok@12344"
                                value="{{ old('password', $petuga->password) }}" maxlength="50">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-warning btn">Update Data Petugas</button>
            </form>
        </div>
    </div>
</x-layouts.app>
