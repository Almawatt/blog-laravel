@extends('layouts.menu')
@section('title', 'Blog da alma | ' . $event->nome)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="noticia-id" style="align-items:center; text-align:center; display:flex; flex-direction:column;">
                <h1 class="titulo-id">{{$event->nome}}</h1>
                <h6 class="descricao-id">{{$event->descricao}}</h6>
                @if($event->img)
                <div class="img-id" style="background-repeat:no-repeat; width: 700px; height: 400px; background-size: contain; background-position: center; background-image: url('{{ asset($event->img)}}')"></div>
                @endif
                <p class="materia-id">{{$event->materia}}</p>
                <h6 class="data-id">Publicado em {{$event->data}}</h6>
            </div>
        </div>
        <div class="col-4" style="display: flex; justify-content:center;">
            <div class="ads" id="ad">
            <div class="ad" style=" background-repeat:no-repeat; width: 200px; height: 400px; background-size: contain; background-position: center; background-image: url('{{ asset('img/ad.jpeg')}}');"></div>
        </div>
</div>
        <div class="col-12">
            <h3 class="titulo-veja">Veja também</h3>
            <div class="veja">
            <div class="materias">
                <div class="container">
                    <div class="row">
                        @foreach ($events as $event)
                        <div class="col-3">
                            <div class="container">
                                <div class="cards">
                                    <a href="{{ route('materias.show', ['slug' => $event->slug]) }}">
                                        <div class="bloco">
                                            <div class="bloco-data">
                                                <p class="data">{{$event->data}}</p>
                                            </div>
                                            <div class="img-m" style="background-repeat:no-repeat;
                                                         height: 200px; width: 250px;
                                                         background-size: cover;
                                                         background-position: center;
                                                         background-image: url('{{ asset($event->img)}}')">
                                            </div>
                                            <h3 class="titulo-m">{{$event->nome}}</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</div>
    </div>
</div>

@endsection