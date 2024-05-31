<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PrincipalController extends Controller
{
    public function principal() {
        return Inertia::render('Publico/Principal');
    }
}
