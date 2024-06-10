<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class EventosController extends Controller
{
    public function index() {
        $eventos = DB::table('eventos')->orderBy('data', 'desc')->get();

        return Inertia::render('Administrativo/Eventos', [
            'eventos' => $eventos,
        ]);
    }
}
