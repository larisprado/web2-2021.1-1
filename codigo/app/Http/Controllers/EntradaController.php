<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Http\Requests\StoreEntradaRequest;
class EntradaController extends Controller
{
    //
    public function show(){
        $entradas = Entrada::all();
        echo $entradas;
    }

    public function index(){
        $entradas = Entrada::all();
        return view('entrada.index', ['entradas'=>$entradas]);
    }
    public function create(){
        return view('entrada.create'); 
    }

    public function store(StoreEntradaRequest $request)
    {
        $entrada = new Entrada();
        $entrada->idfornecedor = $request->idfornecedor;
        $entrada->valortotal = $request->valortotal;
        $entrada->datacompra = $request->datacompra;
        $entrada->save();

        return redirect('/entradas/');
    }

    
    public function edit($id){
        $entrada = Entrada::findorFail($id);
        return view('entrada.edit', ['entrada'=>$entrada]);
    }

    public function update(StoreEntradaRequest $request){
        Entrada::find($request->id)->update($request->except('_method'));
        return redirect('entrada/index')->with('msg', 'entrada atualizada');
    }
    
    public function destroy($id){
        Entrada::findorFail($id)->delete();
        return redirect('entrada/index')->with('msg', 'entrada excluída com sucesso');
    }

}