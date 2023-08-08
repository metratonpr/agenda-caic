@extends('index')
@section('content')
<div>
    <div>
        <h1>Lista de Tipos</h1>
    </div>
    <div>
        <a href=" {{ route('tipos.create') }}" 
        class="btn btn-primary" role="button">Novo</a>
    </div>
</div>
@endsection