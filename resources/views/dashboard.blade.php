@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

<div class="container">
        <div class="row">
                <div class="col col-md-12">
                        <div class=" ">
                                <div class="header h1 col-6 offset-3" style="left: 20px;">
                                        Leia suas notícias aqui!
                                </div>
                                <hr>
                        </div>
                        <form class="form-inline mb-4" action=" {{ route('write.search',['id' => $uid]) }}" method="get">
                                @csrf
                                @method('get')
                                <div class="input-group col-6 display-inline offset-2">
                                        <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                        <i class="tim-icons icon-zoom-split"></i>
                                                </div>
                                        </div>
                                        <input type="search" name="pesquisa" class="form-control" placeholder="Pesquisar por títulos de notícias">
                                </div>
                                <div class="pb-2">
                                        <button type="submit" class="btn btn-md btn-info"> Pesquisar </button>
                                </div>
                        </form>
                </div>
        </div>
        @foreach ($noticias as $noti)
        @if ($noti['idUser'] == Auth::id())
        <div class="card text-center" style="">
                <div class="card-body text-center my-2">
                        <p class="h1 card-title mt-3"> {{ $noti['titulo'] }} </p>
                        <hr class="col-4">
                </div>
                <div class="card-body text-center mx-5">
                        <p class="h3">{{ $noti['noticia'] }}</p>
                </div>
                <form action="{{'/write/'.$noti->id.'/delete'}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="form-inline col-12 justify-content-center" style="margin-bottom: 20px; padding-bottom: 20px;">
                                <a href="{{'/write/'.$noti->id.'/edit'}}" class="btn btn-default col-2 btn-lg"><strong class="text-white">Editar</strong></a>
                                <button type="submit" class="btn btn-danger col-2 btn-lg"><strong class="text-white">Deletar</strong></button>
                        </div>
                </form>

        </div>
        @endif
        @endforeach
</div>

</div>


@endsection