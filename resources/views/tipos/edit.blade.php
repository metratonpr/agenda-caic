@extends('index')
@section('content')
<div class="col-6">
    <div>
        <h1>Editando Tipo</h1>
    </div>
    <div>
        <form action="{{ route('tipos.update',['tipo' =>$tipo]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" 
                class="form-control  @error('descricao') is-invalid @enderror"
                id="descricao" 
                placeholder="Exemplo: Cancelado" name="descricao"                
                value="{{ $tipo->descricao ?? old('descricao') }}"
                >
                @error('descricao')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="btn-group">
                <button type="submit" class="btn btn-success">Salvar</button>
                <button type="reset" class="btn btn-danger">Limpar</button>
            </div>
        </form>
    </div>
</div>
@endsection