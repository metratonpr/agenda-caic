@extends('index')
@section('content')
<div>
    <div>
        <h1>Lista de Tipos</h1>
    </div>
    <div>
        <a href=" {{ route('tipos.create') }}" class="btn btn-primary" role="button">Novo</a>
    </div>
    <div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Descrição</th>
                    <th>Criado em:</th>
                    <th>Atualizado em:</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tipos as $t)
                <tr>
                    <td> {{$t->id}} </td>
                    <td> {{$t->descricao}} </td>
                    <td> {{$t->created_at}} </td>
                    <td> {{$t->updated_at}} </td>
                    <td>Opções </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection