<x-app>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('pembeli.index') }}" role="button">Back To Pembeli</a>

    {{-- Informasi Pembeli --}}
    <div class="card mb-4">
        <div class="card-header">
            <strong>Detail Pembeli</strong>
        </div>
        <div class="card-body">
            <p class="mb-1"><strong>Pembeli:</strong> {{ $pembeli->pembeli }}</p>
            <p class="mb-1"><strong>Email:</strong> {{ $pembeli->email }}</p>
            <p class="mb-1"><strong>Telepon:</strong> {{ $pembeli->telepon }}</p>
            <p class="mb-0"><strong>Alamat:</strong> {{ $pembeli->alamat }}</p>
        </div>
    </div>

    {{-- Daftar Riwayat Pembelian --}}
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <strong>Daftar Riwayat Pembelian</strong>
            <span class="badge bg-primary">Total: {{ $pembeli->riwayatPembelians->count() }} Transaksi</span>
        </div>
        <div class="card-body">
            @if ($pembeli->riwayatPembelians->isEmpty())
                <div class="alert alert-info mb-0">
                    Pembeli ini belum memiliki riwayat pembelian.
                </div>
            @else
                <div class="table-responsive">
                    <table id="example" class="table table-bordered border-danger table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Judul Game</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Total Bayar</th>
                                <th scope="col">Metode</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembeli->riwayatPembelians as $riwayatPembelian)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $riwayatPembelian->judul_game }}</td>
                                    <td>{{ $riwayatPembelian->jenis }}</td>
                                    <td>{{ $riwayatPembelian->tanggal?->format('d-m-Y') }}</td>
                                    <td>Rp {{ number_format($riwayatPembelian->total_bayar, 0, ',', '.') }}</td>
                                    <td>{{ $riwayatPembelian->metode }}</td>
                                    <td>{{ $riwayatPembelian->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</x-app>