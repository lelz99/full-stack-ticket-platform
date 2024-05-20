<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tickets = [
            [
                'title' => 'Titolo del Ticket 1',
                'state' => 'assegnato',
                'description' => 'Il sito non si carica correttamente.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Titolo del Ticket 2',
                'state' => 'in lavorazione',
                'description' => 'Errore durante la registrazione dell\'account.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Titolo del Ticket 3',
                'state' => 'chiuso',
                'description' => 'Impossibile recuperare la password.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Titolo del Ticket 4',
                'state' => 'assegnato',
                'description' => 'La pagina dei contatti mostra un errore 404.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Titolo del Ticket 5',
                'state' => 'in lavorazione',
                'description' => 'Il pulsante di invio non funziona nel modulo di contatto.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Titolo del Ticket 6',
                'state' => 'chiuso',
                'description' => 'Richiesta di miglioramento del layout della homepage.',
                'category' => 'feature request',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Titolo del Ticket 7',
                'state' => 'assegnato',
                'description' => 'Problemi di visualizzazione su dispositivi mobili.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Titolo del Ticket 8',
                'state' => 'in lavorazione',
                'description' => 'L\'applicazione si blocca durante l\'avvio.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Titolo del Ticket 9',
                'state' => 'chiuso',
                'description' => 'Richiesta di aggiungere il supporto per una nuova lingua.',
                'category' => 'enhancement',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Titolo del Ticket 10',
                'state' => 'assegnato',
                'description' => 'Non riesco a caricare immagini nel mio profilo.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
        ];

        foreach ($tickets as $ticket) {
            $new_ticket = new Ticket();

            $new_ticket->fill($ticket);
            $new_ticket->save();
        }
    }
}
