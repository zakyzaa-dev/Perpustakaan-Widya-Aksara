<x-layouts.app title="Buku">
    <h3 class="mt-3 text-dark mb-1">Daftar Buku</h3>
    <p class="text-muted small">Kelola data buku perpustakaan Widya Aksara.</p>

    @if (session('success'))
        <div class="alert alert-success">
            <b>{{ session('success') }}</b>
        </div>
    @endif

    <div class="card">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
            <a href="{{ route('buku.create') }}" class="btn-primary btn btn-sm">
                <i class="fas fa-plus fa-sm"></i> Tambah Buku
            </a>
        </div>
        <div class="card-body">
            <livewire:buku-search />
        </div>
    </div>

</x-layouts.app>
