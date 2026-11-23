<x-app>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('game.index') }}" role="button">Back To Game</a>

    <div class="card">
        
            <p class="mb-2"><strong>Judul Game:</strong> {{ $game->title }}</p>
            <p class="mb-2"><strong>Platform:</strong> {{ $game->platform }}</p>
            <p class="mb-2"><strong>Genre:</strong> {{ $game->genre }}</p>
            <p class="mb-2"><strong>Developer:</strong> {{ $game->developer }}</p>
            <p class="mb-0"><strong>Tahun Rilis:</strong> {{ $game->release_year }}</p>
        </div>
    </div>
</x-app>