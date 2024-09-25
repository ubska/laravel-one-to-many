@extends('layouts.app')

@section('content')
    <h1>Elenco post per categoria</h1>
    @foreach ($types as $type)
        <h2 class="mt-5">{{ $type->name }}</h2>
        <ul class="list-group">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
        </ul>
    @endforeach
@endsection
