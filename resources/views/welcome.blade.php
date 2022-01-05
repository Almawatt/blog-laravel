@extends('layouts.menu')
@section('title', 'Blog da Alma')
@section('content')

<body>
    <div class="banner" style="background-image: url('{{ asset('img/modelo4.png')}}');"></div>

    <section>
        <div class="centralizar">
            <div class="bloco-branco">
                @if ($pesquisa)
                <h3 class="titulo-h3">Pesquisa</h3>
                @else
                <h3 class="titulo-h3">Principais matérias</h3>
                @endif
            </div>
        </div>
        <div class="centralizar">
            <div class="materias">
                <div class="container">
                    <div class="row">
                        @if($events)
                        @foreach ($events as $event)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
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
                        @else
                        <p> Se matérias cadastradas </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="desce">
        <div class="sobre">
            <div class="container">
                <div class="row">
                    <div class="col-12  col-md-4 col-lg-3">
                        <div class="img-s" style="background-image: url('{{ asset('img/sobre.jpg')}}');"></div>
                    </div>
                    <div class="col-12  col-md-6 col-lg-6">
                        <div class="info-s">
                            <h3 class="titulo-s">Sobre mim:</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus impedit eius unde nisi qui quibusdam amet perferendis consequatur porro vel suscipit eum similique commodi, illum laudantium provident error incidunt odio?</p>
                        </div>
                    </div>
                    <div class="col-12  col-md-1 col-lg-3">
                        <div class="redes">
                            <a href="#"><img class="social" src="img/instagram.png"></a>
                            <a href="#"><img class="social" src="img/facebook.png"></a>
                            <a href="#"><img class="social" src="img/youtube.png"></a>
                            <a href="#"><img class="social" src="img/linkedin.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

@endsection