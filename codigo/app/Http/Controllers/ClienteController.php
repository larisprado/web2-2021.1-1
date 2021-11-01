<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //
    // public function show()
    // {
    //     $clientes = Cliente::all();
    //     echo $clientes;
    // }

    public function index()
    {
        $clientes = Cliente::all();

        return view('clientes.index', ['clientes' => $clientes]);
    }

    public function show($id)
    {
        if($id)
        {
            $clientes = Cliente::where('id', $id)->get();
        }else{
            $clientes = Cliente::all();
        }
        return view('clientes.show', ['clientes'=>$clientes]);
    }

    

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->endereco = $request->endereco;
        $cliente->debito = $request->debito;
        $cliente->save();

        return redirect('clientes/');
    }

    public function edit($id){
        $cliente = Cliente::findorFail($id);
        return view('clientes.edit', ['cliente'=>$cliente]);
    }

    public function update(Request $request){
        Cliente::find($request->id)->update($request->except('_method'));
        return redirect('clientes/')->with('msg', 'Cliente atualizado');
    }
    
    public function destroy($id){
        Cliente::findorFail($id)->delete();
        return redirect('clientes/')->with('msg', 'Cliente excluído com sucesso');
    }
}
