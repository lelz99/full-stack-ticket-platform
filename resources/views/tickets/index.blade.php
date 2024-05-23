@extends('layouts.app')

@section('content')


<div class="container mt-3">
    <div class="d-flex justify-content-end mt-5 mb-1">
        <a href="{{route('tickets.create')}}" class="btn btn-sm btn-success rounded-4 fw-bold justify-content-end">
            <i class="fa-solid fa-plus"></i>
            <span class="d-none d-xl-inline">Assegna un ticket</span>
        </a>
    </div>
    <table class="table text-center align-middle">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Operatore assegnato</th>
                <th scope="col">Categoria</th>
                <th scope="col">Stato</th>
                <th scope="col">Data</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tickets as $ticket)
            <tr>
                <td>{{$ticket->title}}</td>
                <td>{{$ticket->user->name}}</td>
                <td><span class="{{ 'category-' . $ticket->category }}">{{ $ticket->category }}</span></td>
                <td>
                    <span role="button" class="{{ 'state-' . str_replace(' ', '-', strtolower($ticket->state)) }} badge-drop-down update-state">
                        {{ $ticket->state }}
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                    <form action="{{route('tickets.update', $ticket->id)}}" method="POST" class="form-state d-flex align-items-center justify-content-center gap-1 pt-1 d-none mb-0">
                        @csrf 
                        @method('PATCH')
                        <select class="rounded-pill p-1" name="state">
                            <option @if($ticket->state == 'assegnato') selected @endif value="assegnato">Assegnato</option>
                            <option @if($ticket->state == 'in lavorazione') selected @endif value="in lavorazione">In lavorazione</option>
                            <option @if($ticket->state == 'chiuso') selected @endif value="chiuso">Chiuso</option>
                        </select>
                        <button type="submit" class="btn btn-sm px-1 py-0 rounded-pill btn-success">
                            salva
                        </button>
                    </form>
                </td>
                <td>{{$ticket->getCreatedAt($ticket->created_at)}}</td>
                <td><a class="btn btn-sm btn-primary " href="{{route('tickets.show', $ticket->id)}}"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
            @empty
                <td colspan="6">
                    <h5>Non ci sono Ticket</h5>
                </td>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

@vite('resources/js/select_state.js')