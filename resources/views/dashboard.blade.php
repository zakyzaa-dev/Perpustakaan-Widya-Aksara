<x-layouts.app title="Dashboard">
    <h3 class="text-dark mt-3 mb-1">Dashboard</h3>

    <div class="card shadow">
        <div class="card-body">
            <h3 class="font-weight-bold text-dark">Selamat Datang {{ Auth::user()->nama_petugas }}!</h3>
        </div>
    </div>

    <div class="row mt-3">
        <x-card-stats title="Jumlah Petugas" color="primary" icon="fa-user" :value="$jumlahPetugas . ' ' . 'Petugas'"></x-card-stats>
        <x-card-stats title="Jumlah Anggota" color="success" icon="fa-users" :value="$jumlahAnggota . ' ' . 'Anggota'"></x-card-stats>
        <x-card-stats title="Jumlah Buku" color="warning" icon="fa-book" :value="$jumlahBuku . ' ' . 'Buku'"></x-card-stats>
        <x-card-stats title="Jumlah Peminjaman" color="info" icon="fa-box" :value="$jumlahPeminjaman . ' ' . 'Peminjaman'"></x-card-stats>
    </div>
    <div class="card shadow border-left-danger">
        <div class="card-body">
            <h2 class="font-weight-bold text-dark">Aplikasi Perpustakaan Widya Aksara</h2>
            <p class="small text-muted"><b>Aplikasi Perpustakaan Widya Aksara</b> adalah sistem manajemen informasi
                berbasis web yang dirancang khusus untuk mengoptimalkan operasional pengelolaan perpustakaan secara
                internal. Aplikasi ini dikhususkan secara eksklusif bagi petugas atau pustakawan, sehingga tidak
                menyediakan akses login bagi anggota atau pengunjung umum. Melalui sistem ini, petugas dapat memegang
                kendali penuh atas seluruh administrasi perpustakaan, mulai dari pencatatan data koleksi buku baru,
                pengaturan kategori, hingga manajemen inventaris secara berkala.</p>

            <p class="small
                text-muted">Selain itu, aplikasi ini mempermudah proses sirkulasi harian
                seperti transaksi
                peminjaman, pengembalian,
                dan perhitungan denda keterlambatan secara otomatis. Petugas juga dapat memantau riwayat aktivitas
                peminjaman setiap anggota dan mencetak laporan rekapitulasi data perpustakaan dengan cepat dan akurat.
                Dengan antarmuka yang intuitif dan terstruktur, Aplikasi Perpustakaan Widya Aksara membantu meningkatkan
                efisiensi kerja staf, meminimalkan kesalahan pencatatan manual, serta memastikan pengelolaan
                perpustakaan berjalan lebih tertib, transparan, dan profesional. </p>
        </div>
    </div>

</x-layouts.app>
