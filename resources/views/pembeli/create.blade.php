<x-app>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <form method="POST" action="{{ route('pembeli.store') }}">
        @csrf

        <div class="mb-3">
            <label for="pembeli" class="form-label">Nama Pembeli</label>
            <input type="text" class="form-control @error('pembeli') is-invalid @enderror" id="pembeli" name="pembeli"
                value="{{ old('pembeli') }}">
            @error('pembeli')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                name="email" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon"
                name="telepon" value="{{ old('telepon') }}">
            @error('telepon')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                name="alamat" value="{{ old('alamat') }}">
            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-danger" href="{{ route('pembeli.index') }}" role="button">back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
