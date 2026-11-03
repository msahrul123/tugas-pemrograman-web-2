<x-app>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a class="btn btn-danger mb-3" href="{{ route('game.create') }}" role="button">create Game</a>
    
    <table class="table table-bordered border-danger table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul Game</th>
                <th scope="col">Platform</th>
                <th scope="col">Genre</th>
                <th scope="col">Developer</th>
                <th scope="col">Tahun Rilis</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $games as $game )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $game->title }}</td>
                    <td>{{ $game->platform }}</td>
                    <td>{{ $game->genre }}</td>
                    <td>{{ $game->developer }}</td>
                    <td>{{ $game->release_year }}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{ route('game.edit', $game) }}" role="button">edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app>