<x-layouts.app title="Peminjaman">
    <h3 class="text-muted mt-3 mb-1">Daftar Peminjaman</h3>
    <p class="text-muted small">Kelola data peminjaman perpustakaan Widya Aksara</p>

    @if (session('success'))
        <div class="alert alert-success"><b>{{ session('success') }}</b></div>
    @endif

    <div class="card">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="text-primary m0 font-weight-bold">Data Peminjaman</h6>
            <a href="{{ route('peminjaman.create') }}" class="btn-primary btn btn-sm">
                <i class="fas fa-plus fa-sm"></i> Tambah Peminjaman
            </a>
        </div>
        <div class="card-body">
            <livewire:peminjaman-search />
        </div>
    </div>
</x-layouts.app>
