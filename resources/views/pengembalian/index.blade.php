<x-layouts.app title="Pengembalian">
    <h3 class="mt-3 mb-1 text-dark">Pengembalian Buku</h3>
    <p class="text-muted small">Kembalikan buku yang dipinjam dari perpustakaan Widya Aksara</p>

    <div class="card">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengembalian</h6>
            <a href="{{ route('pengembalian.create') }}" class="btn-primary btn btn-sm">
                <i class="fas fa-plus fa-sm"></i> Tambah Pengembalian
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table-striped table-bordered table text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID Peminjaman</th>
                            <th>Nama Peminjam</th>
                            <th>Buku Dipinjam</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Lama Peminjaman</th>
                            <th>Total Hari Peminjaman</th>
                            <th>Keterlambatan</th>
                            <th>Denda</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pengembalians as $item)
                            <tr>
                                <td>{{ $item->id_pengembalian }}</td>
                                <td>{{ $item->id_peminjaman }}</td>
                                <td>{{ $item->peminjaman?->anggota?->nama_anggota ?? '-' }}</td>
                                <td>{{ $item->peminjaman?->buku?->judul_buku ?? '-' }}</td>
                                <td>{{ $item->peminjaman?->tanggal_pinjam->format('d F Y') ?? '-' }}</td>
                                <td>{{ $item->tanggal_kembali->format('d F Y') }}</td>
                                <td>{{ $item->peminjaman?->tanggal_pinjam->diffInDays($item->peminjaman->tanggal_harus_kembali) ?? '-' }}
                                    Hari
                                </td>
                                <td>{{ $item->peminjaman?->tanggal_pinjam->diffInDays($item->tanggal_kembali) ?? '-' }}
                                    Hari
                                </td>
                                <td>{{ $item->terlambat_hari }} Hari</td>
                                <td>{{ $item->denda == 0 ? '-' : 'Rp ' . number_format($item->denda, 0, ',', '.') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-muted text-center">Beluma ada data pengembalian!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $pengembalians->links() }}
            </div>
        </div>
    </div>
</x-layouts.app>
