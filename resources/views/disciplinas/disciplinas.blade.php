@extends('layouts.app')

@section('content')

<a href="{{route('disciplinas.index')}}" class="btn btn-primary m-2">
    Inicio
</a>
<a href="{{route('disciplina.novo')}}" class="btn btn-primary">
    Novo
</a>


<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th width="50%">Disciplina</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($disciplinas as $disciplina)
        <tr>
            <td>
                <li>{{ $disciplina->id }}</li>
            </td>
            <td>
                <li>{{ $disciplina->disciplina }}</li>
            </td>
            <td>
                <li>{{ $disciplina->created_at }}</li>
            </td>
            <td>
                <li>{{ $disciplina->updated_at }}</li>
            </td>
            <td>
                <a href="{{ route('disciplina.editar', 
                ['id' => $disciplina->id]) }}" 
                class="btn btn-secondary btn-sm">Editar</a>

                <a href="{{ route('disciplina.excluir',
                ['id' => $disciplina->id])}}" 
                class="btn btn-danger btn-sm">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th colspan="5">
                # Número de registros: {{ App\Models\Disciplina::count() }} 
            </th>
        </tr>
    </tfoot>
</table>

@endsection