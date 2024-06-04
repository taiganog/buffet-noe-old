<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FotosController extends Controller
{
    public function fotos() {
        return Inertia::render('Publico/Fotos');
    }

}
