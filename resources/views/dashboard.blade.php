@extends('layouts.main')

@section('title', 'Deshboard')

@section('content')

<div class="col-md-10 offset-md-1 deshboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 deshboard-events-container">
    @if (count($events) > 0)
        
    @else
        <p>Você ainda não tem eventos, <a href="/events/create">criar evento.</a></p>
    @endif
</div>



@endsection
