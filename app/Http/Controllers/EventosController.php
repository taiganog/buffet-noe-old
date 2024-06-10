<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

class EventosController extends Controller
{
    // Formatando a data de Y-m-d para d/m/Y
    // e deixando o tipo de evento apresentável
    private function editarResponseEventos($eventos): void {
        foreach ($eventos as $key => $evento) {
            // Formatando data
            $eventoDia = substr($evento->{ 'data' }, -2);
            $eventoMes = substr($evento->{ 'data' }, -5, -3);
            $eventoAno = substr($evento->{ 'data' }, 0, -6);

            $eventos[$key]->{ 'data' } = "$eventoDia/$eventoMes/$eventoAno";

            // Formatando tipo de evento
            switch($eventos[$key]->{ 'tipo' }) {
                case 'FESTA_INFANTIL':      $eventos[$key]->{ 'tipo' } = 'Festa Infantil'; break;
                case '15_ANOS':             $eventos[$key]->{ 'tipo' } = '15 Anos'; break;
                case 'FESTA_ADULTO':        $eventos[$key]->{ 'tipo' } = 'Festa Adulto'; break;
                case 'CASAMENTO':           $eventos[$key]->{ 'tipo' } = 'Casamento'; break;
                case 'FORMATURA':           $eventos[$key]->{ 'tipo' } = 'Formatura'; break;
                case 'CONFRATERNIZACAO':    $eventos[$key]->{ 'tipo' } = 'Confraternização'; break;
                case 'CHURRASCO':           $eventos[$key]->{ 'tipo' } = 'Churrasco'; break;

            }
        }
    }

    public function index(): Response {
        $eventos = DB::table('eventos')->orderBy('data', 'desc')->get();

        $this->editarResponseEventos($eventos);

        return Inertia::render('Administrativo/Eventos', [
            'eventos' => $eventos,
        ]);
    }

    public function save(Request $request): Response {

    }
}
