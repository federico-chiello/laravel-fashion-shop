@extends('layouts.app')

@section('title','pagina prodotti')

@section('content')
 <h1>Prodotti</h1>
 @foreach ($vestiti as $vestito)
 <h3>ID vestito: {{ $vestito->id }}</h3>
 <ul>
    <li>{{ $vestito->marca }}</li>
    <li>{{ $vestito->genere }}</li>
    <li>{{ $vestito->taglia }}</li>
</ul>
 @endforeach


@endsection