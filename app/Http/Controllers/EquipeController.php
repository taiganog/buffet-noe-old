<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class EquipeController extends Controller
{
    public function index() {
        return Inertia::render('Administrativo/Equipe');
    }
}
