<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk; // Added this line to import the Penduduk model

class DashboardController extends Controller
{
    public function index()
    {
        $totalPenduduk = Penduduk::count();
        return view('dashboard_user', compact('totalPenduduk'));
    }
}
