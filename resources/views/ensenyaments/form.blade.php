<h1 class="mb-5">{{ isset($ensenyament) ? __("Editar ensenyament") : __("Afegir ensenyament") }}</h1>

<form method="POST" action="{{ isset($ensenyament) ? route('ensenyaments.update', $ensenyament) : route('ensenyaments.store') }}">
    @csrf
    @isset($ensenyament)
        @method("PUT")
    @endisset

    <div class="mb-3">
        <label for="nom" class="form-label">{{ __("Nom") }}</label>
        <input name="nom" type="text" class="form-control" value="{{ old("nom") ?? $ensenyament->nom ?? '' }}">
        @error("nom")
        <div class="fs-6 text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <button class="btn btn-primary" type="submit">
            {{ isset($ensenyament) ? __("Actualitzar") : __("Afegir") }}
        </button>
        <a href="{{ route('ensenyaments.index') }}" class="btn btn-outline-secondary">⬅ Tornar al llistat</a>
    </div>
</form>