@extends('layouts.main')

@section('title', $event->tittle)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
            <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->tittle}}">
        </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->tittle }}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{ $event->city }}</p>
                <p class="evets-participants"><ion-icon name="people-outline"></ion-icon> {{ count($event->users) }}</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon> {{ $eventOwner['name'] }} </p>
                <form action="/events/join/{{ $event->id }}" method="POST">
                    @if(!$hasUserJoined)
                        @csrf
                        <a href="/events/join/{{ $event->id }}" 
                        class="btn btn-primary" 
                        id="event-submit"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        Confirmar Presença
                    @else
                          <p class="already-joined-msg">Você já está participando deste evento: {{ $event->tittle }}</p>  
                    @endif
                </a>
                </form>
                <h3>O Evento conta com: </h3>
                <ul id="items-list">
                    @foreach ($event->items as $item )
                        <li><ion-icon name="play-outline"></ion-icon><span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o Event:</h3>
                <p class="event-description"> {{ $event->description }}</p>
            </div>
        </div>

    </div>


@endsection