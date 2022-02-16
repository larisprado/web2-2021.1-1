<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Http\Requests\StoreFornecedorRequest;

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

    public function store(StoreFornecedorRequest $request)
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $request->nome;
        $fornecedor->endereco = $request->endereco;
        $fornecedor->telefone = $request->telefone;
        $fornecedor->cnpj = $request->cnpj;
        $fornecedor->save();

        return redirect('fornecedor/');
    }
    public function edit($id){
        $fornecedor = Fornecedor::findorFail($id);
        return view('fornecedores.edit', ['fornecedor'=>$fornecedor]);
    }

    public function update(StoreFornecedorRequest $request){
        Fornecedor::find($request->id)->update($request->except('_method'));
        return redirect('fornecedor/')->with('msg', 'Fornecedor atualizado');
    }
    
    public function destroy($id){
        Fornecedor::findorFail($id)->delete();
        return redirect('fornecedor/')->with('msg', 'Fornecedor excluído com sucesso');
    }

}
