@extends('layouts.app', ['pageSlug' => 'dashboard'])
@section('content')
<div class="container">
    <div class="row">
        <div class=" col col-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-group" action="{{ route('write.salvar') }}" method="post">
                        <div class="card-header text-center ">
                            <h2>Escrever nova notícia</h2>
                            @if (session()->has('message'))
                            <div class=" col-12 alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session()->get('message') }}</strong>
                                <button style="top: 35px;" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="tim-icons icon-simple-remove"></i>
                                </button>
                            </div>
                            @endif
                            @if ($errors->any())
                            <div class="col-12 alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Erro:</strong> verifique se preencheu todos os campos.
                                <button style="top: 35px;" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="tim-icons icon-simple-remove"></i>
                                </button>
                            </div>
                            @endif
                            <hr>
                        </div>
                        <div class="card-body">
                            @method('POST')
                            @csrf
                            <div class="col-6 offset-1" style="margin-bottom: 30px; padding-left: 17px;">
                                <h3 style="padding-bottom: 0px; margin-bottom: 0px;">Título: </h3>
                                <input style="font-size: 1.15em;" type="title" class="form-control" placeholder="Seu título aqui" name="titulo">
                            </div>
                            <div class="pl-3 offset-1">
                                <h3>Escreva aqui sua notícia:</h3>
                                <textarea class="form-control font-weight-bold mb-5" rows="10" style="font-size: 1.15em; background-color: #eff0f2; width: 90%; padding-bottom: 500px" name="noticia" placeholder=""></textarea>
                            </div>
                            <div class='offset-4 '>
                                <button type="submit" class="col-6  text-center btn btn-lg btn-info"> Publicar
                                    notícia</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection