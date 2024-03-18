@extends('layouts.app')

@section('content')
<div class="content-container">
    <div class="container">
        <h1>Minha primeira página em Laravel</h1>
        <p>Rumo ao desenvolvimento moderno</p>
        <p>Seja bem-vindo(a) {{$nome}}</p>

        <h2>Minhas disciplinas:</h2>
        <ul class="list-group">
        @foreach($disciplinas as $disciplina)
            <li class="list-group-item btn btn-light">{{$disciplina}}</li>
        @endforeach
        </ul>
        <div class="text-center">
        <a class="btn btn-primary my-3" href="{{route('inicio')}}">Voltar para o início</a>
        </div>
    </div>
</div>

@endsection