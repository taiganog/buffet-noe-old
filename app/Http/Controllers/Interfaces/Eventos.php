<?php

namespace App\Http\Controllers\Interfaces;

use App\Http\Requests\EventoCreateRequest;
use Illuminate\Http\Request;
use Inertia\Response;

abstract class Eventos {
    // Formatando a data de Y-m-d para d/m/Y
    // e deixando o tipo de evento apresentável
    public function formatarDados($request): void {
        foreach ($request as $key => $evento) {
            // Formatando data
            $eventoDia = substr($evento->{ 'data' }, -2);
            $eventoMes = substr($evento->{ 'data' }, -5, -3);
            $eventoAno = substr($evento->{ 'data' }, 0, -6);

            $request[$key]->{ 'data' } = "$eventoDia/$eventoMes/$eventoAno";

            // Formatando tipo de evento
            switch($request[$key]->{ 'tipo' }) {
                case 'FESTA_INFANTIL':      $request[$key]->{ 'tipo' } = 'Festa Infantil'; break;
                case '15_ANOS':             $request[$key]->{ 'tipo' } = '15 Anos'; break;
                case 'FESTA_ADULTO':        $request[$key]->{ 'tipo' } = 'Festa Adulto'; break;
                case 'CASAMENTO':           $request[$key]->{ 'tipo' } = 'Casamento'; break;
                case 'FORMATURA':           $request[$key]->{ 'tipo' } = 'Formatura'; break;
                case 'CONFRATERNIZACAO':    $request[$key]->{ 'tipo' } = 'Confraternização'; break;
                case 'CHURRASCO':           $request[$key]->{ 'tipo' } = 'Churrasco'; break;
            }
        }
    }
}
