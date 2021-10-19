  @extends('layouts.main')
  @section('title', 'HDC Events')
  @section('content')
    
  <div class="menssage">
    @if(session('msg'))
    <p class="msg">{{session ('msg')}}</p>
    @endif
  </div>
    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form class="formulario" action="/" method="GET">
            <input type="text" id="search" name='search' class="form-control container-fluid" placeholder="Procurar">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if ($search)
        <h2>Buscando por: {{$search}}</h2>
        @else
        <h2>todos os eventos...</h2> 
        @endif
        <div id="cards-container" class="row">
            @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <div class="card-date">{{ date('d/m/y', strtotime($event->date))}}</div>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants"> {{count($event->users)}} Participantes</p>
                    <a href="/events/{{ $event->id}}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
            @endforeach
            @if (count($events)== 0  && $search)
                <P id="count-event"><strong>Não foi possível encontrar nenhum eventos com {{$search}} |  <a href="/">Ver todos eventos</a>  </strong></P>
            @elseif (count($events)== 0)
                <p><P id="count-event"><strong>Não há eventos disponiveis}</strong></P></p>
            @endif
        </div>
    </div>




    {{-- esse é um comentário blade, nao aparece no navegador --}}

@endsection