
@extends('layouts.app')

@section('content')

<form class="card" action="{{route('disciplina.atualizar', ['id' => $disciplina->id])}}" method="POST">

    @method('PUT')
    @csrf

    <div class="card-header">
        <div class="card-title">
            Editar disciplina
        </div>
    </div>

    <div class="card-body">
        <div class="form-group">
            <label for="id" class="label-form">ID</label>
            <input type="number" name="id" id="id" class="form-control" 
                   value="{{ $disciplina->id }}" readonly/>
        </div>
        <div class="form-group">
            <label for="disciplina" class="label-form">Disciplina</label>
            <input type="text" name="disciplina" id="disciplina" class="form-control" 
                   value="{{ $disciplina->disciplina }}"/>
        </div>
    </div>

    <div class="card-footer text-center">
        <a href="{{route('disciplinas.index')}}" class="btn btn-primary">
            Voltar
        </a>
        <button type="reset" class="btn btn-secondary">Limpar</button>
        <button type="submit" class="btn btn-danger">Atualizar</button>
    </div>
</form>

@endsection