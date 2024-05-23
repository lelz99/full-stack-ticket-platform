@extends('layouts.app')

@section('content')
    <section class="container mt-5 p-5">
        <div class="card shadow-lg w-75 m-auto rounded-5 px-5">
            <div class="d-flex pt-3 pb-3 justify-content-between align-items-center">
                <h3 class="p-2 mb-0">{{$ticket->title}}</h3>
                <div class="p-2 mb-0 badge-container">
                    <span class="{{ 'category-' . $ticket->category }}">{{ $ticket->category }}</span>
                    <span class="{{ 'state-' . str_replace(' ', '-', strtolower($ticket->state)) }}">{{ $ticket->state }}
                </div>
            </div>

            <div class="card-body pb-1">
                <p class="mb-0">{{$ticket->description}}</p>
            </div>

            <div class="d-flex p-3 justify-content-between align-items-center">
                <span><strong class="me-2">Creato il:</strong>{{$ticket->getCreatedAt($ticket->created_at)}}</span>
                <span><strong class="me-2">Assegnato a:</strong>{{$ticket->user->name}}</span>
            </div>
            {{-- Bottoni --}}
            <div class="mt-3 px-2">
                <div class="d-flex justify-content-between align-items-center pb-3">
                    <a href="{{route('tickets.index')}}" class="btn btn-sm btn-secondary fw-semibold ms-1 px-3 py-2 rounded-pill"><i class="fa-solid fa-left-long me-2"></i>Torna indietro</a>
                </div>
            </div>
        </div>
    </section>
@endsection
