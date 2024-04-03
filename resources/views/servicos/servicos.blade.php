@extends('layouts.app')

@section('content')

<a href="" class="btn btn-primary m-2">
    Inicio
</a>
<a href="{{route('servico.novo')}}" class="btn btn-primary">
    Novo
</a>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Provedor</th>
            <th width=10%>Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>
                <a href="" 
                class="btn btn-secondary btn-sm">Editar</a>

                <a href="" 
                class="btn btn-danger btn-sm">Excluir</a>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="6">
            # Número de registros: {{ App\Models\Servico::count() }}
            </th>
        </tr>
    </tfoot>
</table>

@endsection