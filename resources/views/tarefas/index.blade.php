@extends('index')
@section('content')
<div>
    <div>
        <h1>Lista de Tarefas</h1>
    </div>
    <div>
        <a href=" {{ route('tarefas.create') }}" class="btn btn-primary" role="button">Novo</a>
    </div>
    <div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Assunto</th>
                    <th>Situacao</th>
                    <th>Criado em:</th>
                    <th>Atualizado em:</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tarefas as $t)
                <tr>
                    <td> {{$t->id}} </td>
                    <td> {{$t->assunto}} </td>
                    <td> {{$t->tipo->descricao}} </td>
                    <td> {{$t->created_at}} </td>
                    <td> {{$t->updated_at}} </td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('tarefas.edit',['tarefa' => $t] )}}" role='button' class="btn btn-primary"><i class="bi bi-pencil">Editar</i> </a>
                            <a href="{{ route('tarefas.show',['tarefa' => $t] )}}" role='button' class="btn btn-warning"><i class="bi bi-card-checklist"> Show</i></a>
                        </div>
                        
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection