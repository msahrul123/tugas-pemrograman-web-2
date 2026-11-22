<x-app>
    <x-slot:title>
        {{ $title }}
        </x-slot>

        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <a class="btn btn-danger mb-3" href="{{ route('pembeli.create') }}" role="button">create Pembeli</a>

        <table class="table table-bordered border-danger table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pembeli</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembelis as $pembeli)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $pembeli->pembeli }}</td>
                    <td>{{ $pembeli->email }}</td>
                    <td>{{ $pembeli->telepon }}</td>
                    <td>{{ $pembeli->alamat }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('pembeli.show', $pembeli) }}" role="button">Detail</a>
                        <a class="btn btn-secondary" href="{{ route('pembeli.edit', $pembeli) }}" role="button">edit</a>
                        <form method="POST" action="{{ route('pembeli.destroy', $pembeli) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">delete</button>
                        </form>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</x-app>