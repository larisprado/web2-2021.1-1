<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    
    public function show(){
        $enderecos = Endereco::all();
        echo $enderecos;
    }

    public function index(){
        $enderecos = Endereco::all();
        return view('endereco.index', ['enderecos'=>$enderecos]);
    }
    
    public function create(){
        return view('endereco.create'); 
    }

    public function store(Request $request)
    {
        $endereco = new Endereco();
        $endereco->logradouro = $request->logradouro;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->uf = $request->uf;
        $endereco->cliente_id = $request->cliente_id;
        $endereco->save();
        return redirect('/endereco/index');
    }

    
    public function edit($id){
        $endereco = Endereco::findorFail($id);
        return view('endereco.edit', ['endereco'=>$endereco]);
    }

    public function update(Request $request){
        Endereco::find($request->id)->update($request->except('_method'));
        return redirect('endereco/index')->with('msg', 'endereco atualizado');
    }
    
    public function destroy($id){
        Endereco::findorFail($id)->delete();
        return redirect('endereco/index')->with('msg', 'endereco excluído com sucesso');
    }

}