@extends('layouts.app', ['page' => ('User Profile'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row justify-content-around">
        <div class="col-md-12">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">{{ ('Editar perfil') }}</h5>
                    </div>
                    <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                        <div class="card-body">
                                @csrf
                                @method('put')

                                @include('alerts.success')

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label>{{ ('Nome') }}</label>
                                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ ('Name') }}" value="{{ old('name', auth()->user()->name) }}">
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label>{{ ('Endereço de email') }}</label>
                                    <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ ('Endereço de email') }}" value="{{ old('email', auth()->user()->email) }}">
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-info">{{ ('Salvar') }}</button>
                        </div>
                    </form>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="title">{{ ('Senha') }}</h5>
                    </div>
                    <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                        <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success', ['key' => 'password_status'])

                            <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                <label>{{ ('Senha atual') }}</label>
                                <input type="password" name="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ ('Senha atual') }}" value="" required>
                                @include('alerts.feedback', ['field' => 'old_password'])
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label>{{ ('Nova senha') }}</label>
                                <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ ('Nova senha') }}" value="" required>
                                @include('alerts.feedback', ['field' => 'password'])
                            </div>
                            <div class="form-group">
                                <label>{{ ('Confirme a nova senha') }}</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="{{ ('Confirme a nova senha') }}" value="" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-info">{{ ('Mudar senha') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
