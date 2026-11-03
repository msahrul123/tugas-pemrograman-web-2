<x-app>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <form method="POST" action="{{ route('game.store') }}">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="platform" class="form-label">Platform</label>
            <input type="text" class="form-control @error('platform') is-invalid @enderror" id="platform"
                name="platform" value="{{ old('platform') }}">
            @error('platform')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre"
                name="genre" value="{{ old('genre') }}">
            @error('genre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="developer" class="form-label">Developer</label>
            <input type="text" class="form-control @error('developer') is-invalid @enderror" id="developer"
                name="developer" value="{{ old('developer') }}">
            @error('developer')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="release_year" class="form-label">Release Year</label>
            <input type="number" class="form-control @error('release_year') is-invalid @enderror" id="release_year"
                name="release_year" value="{{ old('release_year') }}">
            @error('release_year')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-danger" href="{{ route('game.index') }}" role="button">back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
