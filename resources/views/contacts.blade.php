@extends('layouts.app')

@section('title','pagina contatti')

@section('content')
 <h1>Contatti</h1>
 <p>{{ $citta }}, {{ $indirizzo }}</p>
 <p></p>
 <p>Telefono: {{ $telefono }}</p>
@endsection