<x-app>
          <x-slot:title>
       {{ $title }}
    </x-slot>

    <a class="btn btn-danger" href="{{ route('game.index') }}" role="button">back to Game</a>
</x-app>