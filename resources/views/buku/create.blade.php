<x-layouts.app title="Tambah Buku">
    <h3 class="mt-3 text-dark mb-1">Tambah Buku</h3>
    <p class="text-muted small">Menambahkan data buku baru untuk Perpustakaan Widya Aksara.</p>

    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 text-primary fw-bold">Form Tambah Buku</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('buku.store') }}" method="post">
                @csrf

                {{-- INPUT Judul Buku BANG INI CEUNAHH --}}
                <div class="mb-3">
                    <label for="judul_buku" class="form-label mb-1">Judul Buku</label>
                    <input type="text" name="judul_buku" id="judul_buku"
                        class="form-control @error('judul_buku') is-invalid @enderror" placeholder="Solanin"
                        value="{{ old('judul_buku') }}" maxlength="150">
                    @error('judul_buku')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- INPUT Penulis BANG INI CEUNAHH --}}
                <div class="mb-3">
                    <label for="penulis" class="form-label mb-1">Penulis</label>
                    <input type="text" name="penulis" id="penulis"
                        class="form-control @error('penulis') is-invalid @enderror" placeholder="Inio ASANO"
                        value="{{ old('penulis') }}" maxlength="100">
                    @error('penulis')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- INPUT USERNAME SAMS JABATAN --}}
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-6 col-12 mb-3">
                            <label for="kode_buku" class="form-label mb-1">Kode Buku</label>
                            <input type="text" name="kode_buku" id="kode_buku"
                                class="form-control @error('kode_buku') is-invalid @enderror" placeholder="BK-001"
                                value="{{ old('kode_buku') }}" maxlength="20">
                            @error('kode_buku')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="stok" class="form-label mb-1">Stok</label>
                            <input type="number" name="stok" id="stok"
                                class="form-control @error('stok') is-invalid @enderror" placeholder="67"
                                value="{{ old('stok') }}" min="1">
                            @error('stok')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-success btn">Tambahkan Buku Baru</button>
            </form>
        </div>
    </div>
</x-layouts.app>
