@extends('index')
@section('content')
<div class="col-6">
    <div>
        <h1>Novo Tipo</h1>
    </div>
    <div>
        <form action="{{ route('tipos.store'}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao" 
                placeholder="Exemplo: Cancelado" name="descricao">
            </div>
            <div class="btn-group">
                <button type="submit" class="btn btn-success">Salvar</button>
                <button type="reset" class="btn btn-danger">Limpar</button>
            </div>
        </form>
    </div>
</div>
@endsection