<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use Illuminate\Http\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class RegisteredClientController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'inputNome' => 'required', 'string', 'max:255',
            'inputEndereco' => ['required', 'string', 'max:255'],
            'inputBairro' => ['required', 'string', 'max:255'],
            'inputCep' => ['required', 'string', 'max:9'],
            'inputCidade' => ['required', 'string', 'max:255'],
            'inputEstado' => ['required', 'string'],
            //'inputEmail' => ['required', 'string', 'email', 'max:255', 'unique:'.Clientes::class],
            'inputSenha' => ['required', 'string']
        ]);

        $cliente = Clientes::create([
            'nome' => $request->inputNome,
            'endereco' => $request->inputEndereco,
            'bairro' => $request->inputBairro,
            'cep' => $request->inputCep,
            'cidade' => $request->inputCidade,
            'estado' => $request->inputEstado,
            'email' => $request->inputEmail,
            'senha' => $request->inputSenha,
        ]);

        return redirect('/visualizar');
    }
    
}
