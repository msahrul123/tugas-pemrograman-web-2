<x-app>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <div class="card">
        <div class="card-header">
            Detail Riwayat Pembelian
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th width="200">Nama Pembeli</th>
                    <td>{{ $riwayatPembelian->pembeli->pembeli ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Judul Game</th>
                    <td>{{ $riwayatPembelian->judul_game }}</td>
                </tr>
                <tr>
                    <th>Jenis</th>
                    <td>{{ $riwayatPembelian->jenis }}</td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td>{{ $riwayatPembelian->tanggal }}</td>
                </tr>
                <tr>
                    <th>Total Bayar</th>
                    <td>Rp {{ number_format($riwayatPembelian->total_bayar, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Metode Pembayaran</th>
                    <td>{{ $riwayatPembelian->metode }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ ucfirst($riwayatPembelian->status) }}</td>
                </tr>
            </table>

            <a href="{{ route('riwayatPembelian.index') }}" class="btn btn-danger">Back</a>
        </div>
    </div>
</x-app>