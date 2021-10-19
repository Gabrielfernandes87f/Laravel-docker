@extends('layouts.main')
@section('title', 'Criar Evento')


@section('content')
<link rel="stylesheet" href="/css/create.css">
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1 class="title-form">Crie seu evento</h1>
    <form class="createform" action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="group-fist">
            <label class="image" for="image">Imagem do evento:</label>
            <input type="file"  name="image" id="image" required class="form-control-file">
        </div>
        <div class="form-groups">
            <label class="labeltitle" for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-groups">
            <label class="date" for="date">Data do evento:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-groups">
            <label class="city" for="city">cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="local do evento">
        </div>
        <div class="form-groups">
            <label for="private">O evento é privado:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-groups">
            <label for="description">Descrição do evento:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <div>
            
        </div>
        <label id="title-group-radio" for="description">adcione itens de infraestrutura:</label>
        
        <div class="form-title container-fluid">
            <div class="form-group-radio ">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group-radio ">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group-radio ">
                <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja Grátis
            </div>
            <div class="form-group-radio ">
                <input type="checkbox" name="items[]" value="Open food"> open food
            </div>
            <div class="form-group-radio ">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>

        </div>

        <input type="submit" class="btn btn-primary" value="Criar Evento">
    
    </form>
</div>


@endsection