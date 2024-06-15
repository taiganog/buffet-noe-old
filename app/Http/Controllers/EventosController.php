<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventoCreateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

use App\Http\Controllers\Interfaces\Eventos;

use App\Models\Responsavel;
use App\Models\Evento;
use App\Models\Complemento;

class EventosController extends Eventos {

    public function index(): Response {
        $eventos = DB::table('eventos')->orderBy('data', 'desc')->get();

        $this->formatarDados($eventos);

        return Inertia::render('Administrativo/Eventos', [
            'eventos' => $eventos,
        ]);
    }

    public function create(EventoCreateRequest $request): Response {
        dd($request->getResponsavel());

        return back();
    }
}
