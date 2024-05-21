@extends('layouts.app')

@section('content')


<div class="container mt-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Operatore assegnato</th>
                <th scope="col">Categoria</th>
                <th scope="col">Stato</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tickets as $ticket)
            <tr>
                <td>{{$ticket->title}}</td>
                <td>{{$ticket->description}}</td>
                <td>{{$ticket->user->name}}</td>
                <td>{{$ticket->category}}</td>
                <td>{{$ticket->state}}</td>
                <td>{{$ticket->getCreatedAt($ticket->created_at)}}</td>
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