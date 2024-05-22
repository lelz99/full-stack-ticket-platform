<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::with('user')->orderBy('user_id')->orderBy('category')->orderBy('state')->orderBy('created_at')->get();
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tickets = Ticket::all();
        $users = User::all();

        return view('tickets.create', compact('tickets', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:5|max:50',
            'description' => 'required|string',
            'category' => 'required|string',
            'user_id' => 'required'
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere minimo :min caratteri',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'category.required' => 'La categoria è obbligatorio',
            'user_id.required' => 'Seleziona un operatore',
        ]);

        $data = $request->all();
        $tickets = new Ticket();
        $tickets->fill($data);
        $tickets['state'] = 'assegnato';
        $tickets->save();

        return to_route('tickets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }
}
