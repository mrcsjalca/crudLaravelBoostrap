<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Aquí puedes devolver una vista de tu dashboard
        return view('dashboard'); // resources/views/dashboard.blade.php
    }
}