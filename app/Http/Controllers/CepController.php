<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class CepController extends Controller
{
    public function buscar( Request $request)
    {
        $cep = $request->input('CEP');
        $response = Http::get("https://viacep.com.br/ws/$cep/json/")->json();
        return view('adicionar')->with
        ([
            'cep' => $response['cep'],
            'logradouro' => $response['logradouro'],
            'bairro' => $response['bairro'],
            'cidade' => $response['localidade'],
            'estado' => $response['uf'],
        ]);

    }
}
