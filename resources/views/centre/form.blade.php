<h1 class="mb-5">{{ $title }}</h1>

<form method="POST" action="{{ $route }}">
    @csrf
    @isset($update)
        @method("PUT")
    @endisset

    <div class="mb-3">
        <label for="nom" class="form-label">{{ __("Nom") }}</label>
        <input 
            name="nom" 
            type="text" 
            class="form-control" 
            value="{{ old('nom') ?? $centre->nom }}"
            placeholder="Introdueix el nom del centre"
        >

        @error("nom")
            <div class="fs-6 text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <button class="btn btn-success" type="submit">
            {{ $textButton }}
        </button>

        <a href="{{ route('centre.index') }}" class="btn btn-outline-secondary">
            ⬅ Tornar al llistat
        </a>
    </div>
</form>