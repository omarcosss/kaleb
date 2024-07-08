<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'presenca' => 'required|boolean',
            'nome' => 'required|string|max:255',
            'qnt_acompanhantes' => 'integer|default:0',
            'alergias' => 'nullable|string|max:255',
        ]);

        // Criação do convidado
        Guest::create([
            'presenca' => $request->presenca,
            'nome' => $request->nome,
            'qnt_acompanhantes' => $request->qnt_acompanhantes,
            'alergias' => $request->alergias,
        ]);

        // Redirecionamento com mensagem de sucesso
        return redirect('/#ver-mais')->with('success', 'Confirmação enviada com sucesso!');
    }
}
