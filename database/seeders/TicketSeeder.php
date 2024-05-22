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
                'title' => 'Problemi di caricamento del sito su diversi browser',
                'state' => 'assegnato',
                'description' => 'Il sito non si carica correttamente su diversi browser. Ho provato con Chrome, Firefox e Safari, ma il problema persiste. La pagina rimane bianca e non viene visualizzato alcun contenuto. Ho cancellato la cache e i cookie, ma il problema non si è risolto.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Errore generico durante la registrazione dell\'account',
                'state' => 'in lavorazione',
                'description' => 'Errore durante la registrazione dell\'account. Dopo aver inserito i dati personali e cliccato sul pulsante di registrazione, compare un messaggio di errore generico senza ulteriori dettagli. Non riesco a completare il processo di iscrizione e ricevo un\'email di conferma incompleta.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Errore 404 nel link per il reset della password',
                'state' => 'chiuso',
                'description' => 'Impossibile recuperare la password. Quando provo a utilizzare la funzione "Password dimenticata", ricevo un\'email con un link per reimpostare la password, ma il link porta a una pagina di errore 404. Questo mi impedisce di accedere al mio account.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Errore 404 sulla pagina dei contatti',
                'state' => 'assegnato',
                'description' => 'La pagina dei contatti mostra un errore 404 quando si tenta di accedervi. Ho provato a raggiungerla sia dal menu principale che tramite un link diretto, ma in entrambi i casi viene visualizzato l\'errore. Questo problema impedisce agli utenti di mettersi in contatto con il supporto.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Pulsante di invio non funzionante nel modulo di contatto',
                'state' => 'in lavorazione',
                'description' => 'Il pulsante di invio non funziona nel modulo di contatto. Dopo aver compilato tutti i campi richiesti, clicco sul pulsante di invio ma non accade nulla. Non viene visualizzato alcun messaggio di conferma o errore, e i dati non vengono inviati al server.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Richiesta di miglioramento del layout della homepage',
                'state' => 'chiuso',
                'description' => 'Richiesta di miglioramento del layout della homepage. Vorrei suggerire alcune modifiche estetiche e funzionali alla homepage. In particolare, penso che sarebbe utile rendere più visibili i pulsanti principali e migliorare l\'usabilità per gli utenti su dispositivi mobili.',
                'category' => 'feature request',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Problemi di visualizzazione su dispositivi mobili',
                'state' => 'assegnato',
                'description' => 'Problemi di visualizzazione su dispositivi mobili. Le pagine del sito non si adattano correttamente agli schermi di smartphone e tablet. Alcuni elementi vengono tagliati e altri sono troppo piccoli per essere leggibili. Questo rende difficile la navigazione per gli utenti mobili.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Blocco dell\'applicazione durante l\'avvio',
                'state' => 'in lavorazione',
                'description' => 'L\'applicazione si blocca durante l\'avvio. Dopo aver aggiornato l\'app all\'ultima versione, non riesco più ad avviarla correttamente. Si blocca alla schermata di caricamento iniziale e devo forzare la chiusura. Ho provato a reinstallare l\'app, ma il problema persiste.',
                'category' => 'bug',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Richiesta di supporto per una nuova lingua',
                'state' => 'chiuso',
                'description' => 'Richiesta di aggiungere il supporto per una nuova lingua. Sarebbe utile aggiungere la possibilità di utilizzare l\'applicazione in spagnolo. Molti utenti parlano questa lingua e l\'inclusione del supporto per lo spagnolo migliorerebbe l\'accessibilità e l\'esperienza utente.',
                'category' => 'enhancement',
                'user_id' => rand(1, 3),
            ],
            [
                'title' => 'Impossibile caricare immagini nel profilo utente',
                'state' => 'assegnato',
                'description' => 'Non riesco a caricare immagini nel mio profilo. Quando provo a caricare una foto, il sistema mostra un messaggio di errore "Impossibile caricare l\'immagine". Ho verificato che il file sia nel formato corretto e sotto il limite di dimensione, ma il problema persiste.',
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
