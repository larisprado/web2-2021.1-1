<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    
    public function show()
    {
        $fornecedores = Fornecedor::all();
        echo $fornecedores;
    }

    public function index()
    {
        $fornecedor = Fornecedor::all();

        return view('fornecedores.index', ['fornecedor' => $fornecedor]);
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $request->nome;
        $fornecedor->endereco = $request->endereco;
        $fornecedor->debito = $request->debito;
        $fornecedor->save();

        return redirect('fornecedor/');
    }
}
