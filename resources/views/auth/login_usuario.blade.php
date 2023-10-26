@extends('layouts.usuario')

@section('conteudo')
<link rel="stylesheet" href="css/menu-resp.css">
    <link rel="stylesheet" href="css/footer-resp.css">
    <link rel="stylesheet" href="css/categoria.css">
    <link rel="stylesheet" href="css/categoria-resp.css">
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login de Usuário Comum') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login.user') }}">
                            @csrf

                            <!-- Campos de E-mail e Senha -->

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection