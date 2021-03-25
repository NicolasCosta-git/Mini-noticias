@extends('layouts.app', ['class' => 'login-page', 'page' => ('Login Page'), 'contentClass' => 'login-page'])

@section('content')
<!--     <div class="col-md-10 text-center ml-auto mr-auto">
        <h3 class="mb-5">Log in to see how you can speed up your web development with out of the box CRUD for #User Management and more.</h3>
    </div> -->
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf

            <div class="card card-login card-white">
                <div class="card-header">
                    <img src="{{ asset('white') }}/img/19112.jpg" alt="" style="z-index: 1; ">
                    <h1 class="card-title">{{ ('Entrar') }}</h1>
                </div>
                <div class="card-body" style="z-index: 2;">
                    <p class="text-dark mb-2"><strong>Digite seu usuário e senha: </strong></p>
                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ ('Email') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="{{ ('Senha') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-info btn-lg btn-block mb-3">{{ ('Entrar') }}</button>
                    <div class="text-center">
                        <h6>
                           <p>Não tem uma conta ?</p> <a href="{{ route('register') }}" class="link footer-link">{{ ('crie uma') }}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
