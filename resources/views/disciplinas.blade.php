@extends('layouts.app')

@section('content')

<div class="content-container">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</td>
                <th width="50%">Disciplina</td>
                <th>Criado em</td>
                <th>Atualizado em</td>
                
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection