@extends('layouts.app')
@section("content")
<div class="container mt-5">
    <div class="text-center">
        <h1>{{ __("Llistat d'ensenyaments") }}</h1>
        <div class="mt-3">
            <a href="{{ route("ensenyaments.create") }}" class="btn btn-primary">{{ __("Afegir ensenyament") }}</a>
            <a href="{{ url('/home') }}" class="btn btn-success">Anar al Dashboard</a>
        </div>
    </div>
    <table class="table table-bordered mb-5 mt-5">
        <thead>
            <tr class="table-success">
                <th>{{ __("Id") }}</th>
                <th>{{ __("Nom") }}</th>
                <th>{{ __("Accions") }}</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ensenyaments as $ensenyament)
            <tr>
                <th scope="row">{{ $ensenyament->id }}</th>
                <td>{{ $ensenyament->nom }}</td>
                <td>
                    <a href="{{ route("ensenyaments.edit", ["ensenyament" => $ensenyament]) }}" class="btn btn-warning">{{ __("Editar") }}</a>
                    <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-ensenyament-{{ $ensenyament->id }}-form').submit();">{{ __("Eliminar") }}</a>
                    <form id="delete-ensenyament-{{ $ensenyament->id }}-form" action="{{ route("ensenyaments.destroy", ["ensenyament" => $ensenyament]) }}" method="POST">
                        @method("DELETE")
                        @csrf
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">
                    <div class="text-center">
                        <p><strong>{{ __("No hi ha ensenyaments") }}</strong></p>
                    </div>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection