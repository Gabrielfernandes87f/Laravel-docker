@extends('layouts.main')
@section('title', 'dashbord')

@section('content')

<div class="col-md10 offset-md-1 dashboard-title-container">
    <h1>meus eventos</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($events) > 0)
        <p>estou funcionando em views</p>
    @else
        <p class="dash-events">Voce ainda nao tem eventos  <a href="/events-create">Criar eventos</a></p>
    @endif
</div>

@endsection