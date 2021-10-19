@extends('layouts.main')
@section('title', 'produto')
@section('content')

@if($id != null)
    <p>Exibindo pruduto id : {{$id}}</p>
@endif
@endsection