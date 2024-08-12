@extends('layouts.main')
@section('title','deshbord')
    

@section('content')
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>

</div>
<div class="col-md-10 offset-md-1 dashbord-events-container">
    @if (count(events)> 0)
    <table class="table">
        <thead>
            <tr>
                <ths></ths>
            </tr>
        </thead>
    </table>
    @else
    <p>sem eventos cadastrados, <a href="/evento1/criarevento">criar eventos</a></p>
        <table class="table"></table>
    @endif

</div>    
@endsection