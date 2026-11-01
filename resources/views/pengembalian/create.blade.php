<x-layouts.app title="Kembalikan buku">
    <h3 class="mt-3 mb-1 text-dark">Kembalikan Buku</h3>
    <p class="small text-muted">Kembalikan buku pinjaman Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor,
        nemo!</p>

    <div class="card">
        <div class="card-header">
            <h6 class="text-primary m-0 font-weight-bold">Form Pengembalian Buku</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pengembalian.store') }}" method="post">
                @csrf

                <div class="row">
                    {{-- DATA PEMINJAMAN --}}
                    <div class="col-12 col-md-6">
                        <label for="id_peminjaman" class="form-label">Data Peminjaman</label>
                        <select name="id_peminjaman" class="custom-select @error('id_peminjaman') is-invalid @enderror">
                            <option value="" selected disabled><--Pilih Data Peminjaman--></option>
                            @forelse ($peminjamans as $item)
                                <option value="{{ $item->id_peminjaman }}"
                                    {{ old('id_peminjaman') == $item->id_peminjaman ? 'selected' : '' }}>
                                    {{ $item->anggota?->nama_anggota ?? 'Tidak dikenal' }} -
                                    ({{ $item->buku?->judul_buku ?? 'Buku tidak ditemukan' }})
                                </option>
                            @empty
                                <option value="" disabled>Belum ada data peminjaman!</option>
                            @endforelse
                        </select>
                        @error('id_peminjaman')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- TANGGAL PENGEMBALIAN --}}
                    <div class="col-12 col-md-6">
                        <label for="tanggal_kembali" class="form-label">Tanggal Pengembalian</label>
                        <input type="date" name="tanggal_kembali"
                            class="form-control @error('tanggal_kembali') is-invalid @enderror"
                            value="{{ old('tanggal_kembali') }}">
                        @error('tanggal_kembali')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="mt-3 btn btn-success">Kembalikan Buku</button>
            </form>
        </div>
    </div>
</x-layouts.app>
