<x-app>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <form method="POST" action="{{ route('riwayatPembelian.update', $riwayatPembelian->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="pembeli_id" class="form-label">Nama Pembeli</label>
            <select class="form-select @error('pembeli_id') is-invalid @enderror" id="pembeli_id" name="pembeli_id">
                <option value="">-- Pilih Pembeli --</option>
                @foreach ($pembelis as $pembeli)
                    <option value="{{ $pembeli->id }}"
                        {{ old('pembeli_id', $riwayatPembelian->pembeli_id) == $pembeli->id ? 'selected' : '' }}>
                        {{ $pembeli->pembeli }}
                    </option>
                @endforeach
            </select>
            @error('pembeli_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="judul_game" class="form-label">Judul Game</label>
            <input type="text" class="form-control @error('judul_game') is-invalid @enderror" id="judul_game"
                name="judul_game" value="{{ old('judul_game', $riwayatPembelian->judul_game) }}">
            @error('judul_game')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis</label>
            <select class="form-select @error('jenis') is-invalid @enderror" id="jenis" name="jenis">
                <option value="">-- Pilih Jenis --</option>
                @foreach (['Top Up', 'Skin', 'Battle Pass', 'Item'] as $jenis)
                    <option value="{{ $jenis }}"
                        {{ old('jenis', $riwayatPembelian->jenis) == $jenis ? 'selected' : '' }}>
                        {{ $jenis }}
                    </option>
                @endforeach
            </select>
            @error('jenis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                name="tanggal" value="{{ old('tanggal', $riwayatPembelian->tanggal) }}">
            @error('tanggal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="total_bayar" class="form-label">Total Bayar</label>
            <input type="number" class="form-control @error('total_bayar') is-invalid @enderror" id="total_bayar"
                name="total_bayar" value="{{ old('total_bayar', $riwayatPembelian->total_bayar) }}">
            @error('total_bayar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="metode" class="form-label">Metode Pembayaran</label>
            <select class="form-select @error('metode') is-invalid @enderror" id="metode" name="metode">
                <option value="">-- Pilih Metode --</option>
                @foreach (['QRIS', 'Transfer Bank', 'E-Wallet'] as $metode)
                    <option value="{{ $metode }}"
                        {{ old('metode', $riwayatPembelian->metode) == $metode ? 'selected' : '' }}>
                        {{ $metode }}
                    </option>
                @endforeach
            </select>
            @error('metode')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                <option value="">-- Pilih Status --</option>
                @foreach (['pending', 'lunas', 'gagal'] as $status)
                    <option value="{{ $status }}"
                        {{ old('status', $riwayatPembelian->status) == $status ? 'selected' : '' }}>
                        {{ ucfirst($status) }}
                    </option>
                @endforeach
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-danger" href="{{ route('riwayatPembelian.index') }}" role="button">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
