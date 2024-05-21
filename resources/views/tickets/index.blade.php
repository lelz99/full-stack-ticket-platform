@extends('layouts.app')

@section('content')


<div class="container mt-3">
    <div class="d-flex justify-content-end mt-5 mb-1">
        <a href="{{route('tickets.create')}}" class="btn btn-sm btn-success rounded-4 fw-bold justify-content-end">
            <i class="fa-solid fa-plus"></i>
            <span class="d-none d-xl-inline">Assegna un ticket</span>
        </a>
    </div>
    <table class="table text-center">
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
                <td>{{$ticket->category}}</td>
                <td>{{$ticket->state}}</td>
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