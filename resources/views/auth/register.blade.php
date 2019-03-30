@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col m6 push-m3">
            <div class="card" style="padding: 10px">
                <h2 class="center-align">Cadastrar usuário no sistema</h2>
                <div class="row">
                    <form class="col s12" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">person</i>
                                <input name="name" id="name" type="text" class="validate">
                                <label for="name">Nome</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">person_pin</i>
                                <input name="username" id="username" type="text" class="validate">
                                <label for="email">Usuário</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input name="password" id="password" type="password" class="validate">
                                <label for="password">Senha</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input name="password_confirmation" id="password_confirmation" type="password" class="validate">
                                <label for="password">Confirmar Senha</label>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col m12">
                                <p class="right-align">
                                    <button class="btn btn-large waves-effect waves-light" type="submit"
                                            name="action">
                                        Registrar
                                    </button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection