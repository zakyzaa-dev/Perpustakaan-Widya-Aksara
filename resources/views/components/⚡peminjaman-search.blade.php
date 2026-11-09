<?php

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Peminjaman;

new class extends Component {
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $peminjamans = Peminjaman::query()
            ->with(['petugas', 'anggota', 'buku'])
            ->when($this->search, function ($query) {
                $search = $this->search;
                $query->where(function ($q) use ($search) {
                    $q->whereHas('anggota', function ($subQuery) use ($search) {
                        $subQuery->where('nama_anggota', 'like', "%{$search}%");
                    })->orWhere('status', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(10);

        return $this->view([
            'peminjamans' => $peminjamans,
        ]);
    }
};
?>

<div>
    <input type="text" wire:model.live.debounce.300.ms="search" name="search" id="search" class="form-control mb-3"
        placeholder="Cari data peminjaman berdasarkan nama peminjam dan status peminjaman...">

    <table class="table-striped table-bordered table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Peminjam</th>
                <th>Nama Petugas</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Lama Peminjaman</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($peminjamans as $item)
                <tr>
                    <td>{{ $item->id_peminjaman }}</td>
                    <td>{{ $item->anggota?->nama_anggota ?? 'Tidak ada nama' }}</td>
                    <td>{{ $item->petugas?->nama_petugas ?? 'Tidak ada nama' }} ({{ $item->petugas?->username ?? '-' }})
                    </td>
                    <td>{{ $item->buku?->judul_buku ?? 'Tidak ada judul' }}</td>
                    <td>{{ $item->tanggal_pinjam?->format('d F Y') ?? '-' }}</td>
                    <td>{{ $item->tanggal_harus_kembali?->format('d F Y') ?? '-' }}</td>
                    <td>{{ $item->tanggal_pinjam->diffInDays($item->tanggal_harus_kembali) }} Hari</td>
                    <td class="{{ $item->status == 'Dipinjam' ? 'text-warning' : 'text-success' }}">{{ $item->status }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-muted
                        text-center" colspan="8">Belum ada data peminjaman!
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-4">
        {{ $peminjamans->links() }}
    </div>
</div>
