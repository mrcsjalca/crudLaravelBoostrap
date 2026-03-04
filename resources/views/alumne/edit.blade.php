@extends("layouts.app")
@section("content")
<div class="container mt-5">
    @include("alumne.form")
    <a href="{{ url('/home') }}" class="btn btn-success">Anar al Dashboard</a>
</div>
@endsection