<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class dashboardController extends Controller
{
    public function dashboard() {
        return Inertia::render('Administrativo/Dashboard');
    }
}
