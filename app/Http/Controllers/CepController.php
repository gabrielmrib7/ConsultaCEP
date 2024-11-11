<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cep\SalvarRequest;
use Http;
use Illuminate\Http\Request;
use App\Models\Endereco;

class CepController extends Controller
{
    public function index()
    {
        $enderecos = Endereco::all();
        return view('tabela')->with([
            'enderecos' => $enderecos,
        ]);
    }
    public function adicionar()
    {
        return view('busca');
    }
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
        Endereco::create([
            'cep' => $request->input('CEP'),
            'logradouro' => $request->input('logradouro'),
            'numero' => $request->input('numero'),
            'bairro' => $request->input('bairro'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
        ]);

        return redirect('/');
    }
}
