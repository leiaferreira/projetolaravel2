@extends('layouts.main')
@section('title','deshbord')
    

@section('content')
<div class="col-md-10 offset-md-1 dashboard-title-containe">
    <h1>Meus Eventos</h1>

</div>
<div class="col-md-10 offset-md-1 dashboard-events-containe">
    @if (count($events)> 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nomes</th>
                <th scope="col" >Participantes</th>
                <th scope="col" >Ações</th>
            </tr>
        </thead>
    </table>
    <tbody>
        @foreach($events as $event)
            <tr>
                <td scropt="row">{{$loop->index + 1}}</td>
                <td><a href="/evento1/{{$event->id}}">{{$event->title}}</a></td>
                <td>0</td>
                <td><a href="#">Editar</a> <a href="#">Deletar</a></td>
            </tr>
        @endforeach
    </tbody>
    @else
    <p>sem eventos cadastrados <a href="/evento1/criarevento">criar eventos ?</a></p>
        
    @endif

</div>    
@endsection