@extends('layouts.app')

@section("content")
<div class="container mt-5">
    <div class="text-center">
        <h1>{{ __("Llistat de centres") }}</h1>

        <div class="mb-3">
            <a href="{{ route("centre.create") }}" class="btn btn-primary me-2">
                {{ __("Afegir centre") }}
            </a>

            <a href="{{ url('/home') }}" class="btn btn-success">
                {{ __("Anar al Dashboard") }}
            </a>
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
            @forelse($centres as $centre)
            <tr>
                <th scope="row">{{ $centre->id }}</th>
                <td>{{ $centre->nom }}</td>
                <td>
                    <a href="{{ route("centre.edit", ["centre" => $centre]) }}" class="btn btn-warning">
                        {{ __("Editar") }}
                    </a>

                    <a href="#" class="btn btn-danger"
                       onclick="event.preventDefault(); document.getElementById('delete-centre-{{ $centre->id }}-form').submit();">
                        {{ __("Eliminar") }}
                    </a>

                    <form id="delete-centre-{{ $centre->id }}-form"
                          action="{{ route("centre.destroy", ["centre" => $centre]) }}"
                          method="POST" style="display:none;">
                        @method("DELETE")
                        @csrf
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">
                    <div class="text-center">
                        <p><strong>{{ __("No hi ha centres") }}</strong></p>
                    </div>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {!! $centres->links() !!}
    </div>
</div>
@endsection