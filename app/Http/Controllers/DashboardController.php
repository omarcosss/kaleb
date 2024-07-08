<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class DashboardController extends Controller
{
    public function index(){
        $guestsVao = Guest::where('presenca', 1)->get();
        $guestsNao = Guest::where('presenca', 0)->get();
        $totalCasas = Guest::where('presenca', 1)->count();
        $totalConvidados = Guest::where('presenca', 1)
            ->sum(\DB::raw('1 + qnt_acompanhantes'));

        return view('dashboard', compact('guestsVao', 'guestsNao', 'totalCasas', 'totalConvidados'));
    }
}
