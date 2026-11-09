<x-layouts.app title="Dashboard">
    <h3 class="text-dark mt-3 mb-1">Dashboard</h3>

    <div class="row mt-3">
        <x-card-stats title="Jumlah Petugas" color="primary" icon="fa-user" :value="$jumlahPetugas . ' ' . 'Petugas'"></x-card-stats>
        <x-card-stats title="Jumlah Anggota" color="success" icon="fa-users" :value="$jumlahAnggota . ' ' . 'Anggota'"></x-card-stats>
        <x-card-stats title="Jumlah Buku" color="warning" icon="fa-book" :value="$jumlahBuku . ' ' . 'Buku'"></x-card-stats>
        <x-card-stats title="Jumlah Peminjaman" color="info" icon="fa-book" :value="$jumlahPeminjaman . ' ' . 'Peminjaman'"></x-card-stats>
    </div>
    <div class="card shadow border-left-danger">
        <div class="card-body">
            <h2 class="font-weight-bold text-dark">Aplikasi Perpustakaan Widya Aksara</h2>
            <p class="small text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, minima
                dignissimos obcaecati, fuga laborum aperiam eius modi aspernatur tempora, deserunt nostrum. Doloribus
                fugit facilis voluptatem quia ea maiores ducimus omnis? Doloremque totam assumenda laudantium, odio
                molestiae ut tempora aliquid possimus. Tempore non labore unde! Possimus aspernatur explicabo, quaerat
                perspiciatis dolores eligendi neque impedit illum voluptate ipsa rem similique eum voluptas culpa omnis
                exercitationem minus accusantium earum facere inventore doloribus ut? Deserunt fugiat odit enim sit
                accusantium quo fugit aut vero praesentium rem voluptatibus debitis architecto aliquid officia suscipit
                asperiores, quod, odio distinctio natus molestias consequatur nobis possimus? Voluptate, architecto
                maxime!</p>
        </div>
    </div>

</x-layouts.app>
