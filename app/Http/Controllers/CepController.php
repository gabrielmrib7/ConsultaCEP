<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cep\SalvarRequest;
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
            'cep' => $request->input('CEP'),
            'logradouro' => $response['logradouro'],
            'bairro' => $response['bairro'],
            'cidade' => $response['localidade'],
            'estado' => $response['uf'],
        ]);

    }

    public function salvar(SalvarRequest $request)
    {
        dd($request->all());
    }
}
