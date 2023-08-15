@extends('index')
@section('content')
<div class="col-6">
    <div>
        <h1>Nova Tarefa</h1>
    </div>
    <div>
        <form action="{{ route('tarefas.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control  @error('data') is-invalid @enderror" id="data" placeholder="Exemplo: Cancelado" name="data" value="{{ old('data') }}">
                @error('data')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="assunto" class="form-label">Assunto</label>
                <input type="text" class="form-control  @error('assunto') is-invalid @enderror" id="assunto" placeholder="Exemplo: Ligar para" name="assunto" value="{{ old('assunto') }}">
                @error('assunto')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control  @error('descricao') is-invalid @enderror" id="descricao" placeholder="Exemplo: Venda de Imovel" name="descricao" value="{{ old('descricao') }}">
                @error('descricao')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="contato" class="form-label">Contato</label>
                <input type="text" class="form-control  @error('contato') is-invalid @enderror" id="contato" placeholder="Exemplo: Jose da Silva" name="contato" value="{{ old('contato') }}">
                @error('contato')
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