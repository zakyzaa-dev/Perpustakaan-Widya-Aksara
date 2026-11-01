<x-layouts.app title="Pinjam Buku">
    <h3 class="text-dark mt-3 mb-1">Pinjam Buku</h3>
    <p class="text-muted small">Pinjam buku dari perpustakaan Widya Aksara</p>

    {{-- @if ($errors->any())
        <div class="alert-danger alert">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <div class="card">
        <div class="card-header">
            <div class="m-0 text-primary fw-bold">Form Peminjaman Buku</div>
        </div>
        <div class="card-body">
            <form action="{{ route('peminjaman.store') }}" method="post">
                @csrf

                <div class="row">
                    {{-- DATA BUKU --}}
                    <div class="col-12 col-md-4 g-3">
                        <div class="mb-3">
                            <label for="id_buku" class="form-label">Daftar Buku</label>
                            <select name="id_buku" id="id_buku"
                                class="custom-select @error('id_buku') is-invalid @enderror" required>
                                <option value="" disabled selected><--Pilih Buku--></option>
                                @forelse ($books as $item)
                                    <option value="{{ $item->id_buku }}"
                                        {{ old('id_buku') == $item->id_buku ? 'selected' : '' }}>{{ $item->judul_buku }}
                                    </option>
                                @empty
                                    <option value="" disabled>Belum ada buku terdaftar!</option>
                                @endforelse
                            </select>
                            @error('id_buku')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- END DATA BUKU --}}
                    {{-- DATA ANGGOTA --}}
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="id_anggota" class="form-label">Daftar Anggota</label>
                            <select name="id_anggota" id="id_anggota"
                                class="custom-select @error('id_anggota') is-invalid @enderror" required>
                                <option value="" disabled selected><--Pilih Anggota--></option>
                                @forelse ($members as $item)
                                    <option value="{{ $item->id_anggota }}"
                                        {{ old('id_anggota') == $item->id_anggota ? 'selected' : '' }}>
                                        {{ $item->nama_anggota }}</option>
                                @empty
                                    <option value="" disabled>Belum ada anggota terdaftar!</option>
                                @endforelse
                            </select>
                            @error('id_anggota')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- END DATA ANGGOTA --}}
                    {{-- DATA ANGGOTA --}}
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="id_anggota" class="form-label">Daftar Petugas</label>
                            <select name="id_petugas" id="id_petugas"
                                class="custom-select @error('id_petugas') is-invalid @enderror" required>
                                <option value="" disabled selected><--Pilih petugas--></option>
                                @forelse ($officers as $item)
                                    <option value="{{ $item->id_petugas }}"
                                        {{ old('id_petugas') == $item->id_petugas ? 'selected' : '' }}>
                                        {{ $item->nama_petugas }}</option>
                                @empty
                                    <option value="" disabled>Belum ada petugas terdaftar!</option>
                                @endforelse
                            </select>
                            @error('id_petugas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- END DATA ANGGOTA --}}
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                            <input type="date" name="tanggal_pinjam" id="tanggal_pinjam"
                                class="form-control @error('tanggal_pinjam') is-invalid @enderror"
                                placeholder="Pilih tanggal peminjaman" required value="{{ old('tanggal_pinjam') }}">
                            @error('tanggal_pinjam')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="tangal_harus_kembali" class="form-label">Tanggal Kembali</label>
                            <input type="date" name="tanggal_harus_kembali" id="tanggal_harus_kembali"
                                class="form-control @error('tanggal_harus_kembali') is-invalid @enderror"
                                placeholder="Pilih tanggal harus dikembalikan" required
                                value="{{ old('tanggal_harus_kembali') }}">
                            @error('tanggal_harus_kembali')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-success btn">Pinjam Buku</button>
            </form>

        </div>
    </div>
</x-layouts.app>
