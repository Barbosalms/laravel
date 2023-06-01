@extends('layouts.base')

@section('content')
    <form action="{{ route('usuario.store')}}" method="post">
        @csrf {{-- @csrf evita um ataque gerando um token diferente --}}
        <div class="row">
            <div class="col-md-6">
                <label class="form-label" for="name">Nome*</label>
                <input class="form-control" type="text" name="name" id="name" required>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="email">E-mail*</label>
                <input class="form-control" type="email" name="email" id="email" >
            </div>
            <div class="col-md-6">
                <label class="form-label" for="password">Senha*</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="password">Confirmar senha*</label>
                <input class="form-control" type="password" name="" id="">
            </div>
            <div class="col-md-2">
                <input class="btn btn-success mt-3" type="submit" value="Cadastrar">
            </div>
        </div>



    </form>
@endsection()
