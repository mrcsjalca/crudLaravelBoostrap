@extends('layouts.app')

@section('content')
<div class="alumne-container">
    <div class="alumne-card">
        <h1>Informació de l'alumne</h1>

        <p><strong>Nom:</strong> {{ $alumne->nom }}</p>
        <p><strong>Cognoms:</strong> {{ $alumne->cognoms }}</p>
        <p><strong>Data de naixement:</strong> {{ $alumne->data_naixement }}</p>
        <p><strong>Correu electrònic:</strong> {{ $alumne->email }}</p>
        <p><strong>Telèfon:</strong> {{ $alumne->telefon }}</p>
        <p><strong>Ensenyament:</strong> {{ $alumne->ensenyament->nom ?? 'Sense ensenyament' }}</p>
        <a href="{{ route('alumne.index') }}" class="btn btn-secondary">Tornar a la llista d'alumnes</a>
    </div>
</div>
@endsection