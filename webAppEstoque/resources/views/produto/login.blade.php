@extends('layout.principal')
@section('conteudo')

    <form>
        <div @class('form-group')>
            <label>Usuário</label>
            <input name="use" @class('form-control')/>
        </div>
        <div @class('form-group')>
            <label>Senha</label>
            <input name="senha" @class('form-control')/>
        </div>
        <button type="button" class="btn btn-primary btn-block">Entrar</button>
    </form>

@stop
