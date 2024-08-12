@extends('layouts.main')
@section('title', 'HDC Events')


@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">

    </form>

</div>
<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por : {{ $search }}</h2>
@else
   <h2>Proximos Eventos</h2> 
@endif
    <p class="subtitle" >Veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($eventos as $eventos)
        <div class="card col-md-3">
            <img src="/img/events/{{ $eventos->image }}" alt="{{ $eventos->title }}">
            <div class="card-body">
                <div class="card-date">{{ date('d/m/Y', strtotime($eventos->date)) }}</div>
                <h5 class="card-title">{{ $eventos->title }}</h5>
                <p class="card-participantes"> X Participantes</p>
                <a href="/evento1/{{ $eventos->id }}" class="btn btn-primary">Saiba mais</a>
            </div>


        </div>

        @endforeach
        
    </div>
</div>


@endsection