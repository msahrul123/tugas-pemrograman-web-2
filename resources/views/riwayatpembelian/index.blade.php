<x-app>
    <x-slot:title>
        {{ $title }}
        </x-slot>

        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <a class="btn btn-danger mb-3" href="{{ route('riwayatPembelian.create') }}" role="button">Create Riwayat
            Pembelian</a>

        <table class="table table-bordered border-danger table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pembeli</th>
                    <th scope="col">Judul Game</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Total Bayar</th>
                    <th scope="col">Metode</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($riwayatPembelians as $riwayatPembelian)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $riwayatPembelian->pembeli->pembeli}}</td>
                    <td>{{ $riwayatPembelian->judul_game }}</td>
                    <td>{{ $riwayatPembelian->jenis }}</td>
                    <td>{{ $riwayatPembelian->tanggal?->format('d-m-Y') }}</td>
                    <td>Rp {{ number_format($riwayatPembelian->total_bayar, 0, ',', '.') }}</td>
                    <td>{{ $riwayatPembelian->metode }}</td>
                    <td>{{ $riwayatPembelian->status }}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{ route('riwayatPembelian.edit', $riwayatPembelian) }}"
                            role="button">edit</a>
                        <form method="POST" action="{{ route('riwayatPembelian.destroy', $riwayatPembelian) }}"
                            class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">delete</button>
                        </form>
                    </td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</x-app>