<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Http\Requests\StoreClienteRequest;
class VendaController extends Controller
{
    
    public function show(){
        $vendas = Venda::all();
        echo $vendas;
    }

    public function index(){
        $vendas = Venda::all();
        return view('venda.index', ['vendas'=>$vendas]);
    }
    public function create(){
        return view('venda.create'); 
    }

    public function store(StoreClienteRequest $request)
    {
        $venda = new Venda();
        $venda->idcliente = $request->idcliente;
        $venda->valortotal= $request->valortotal;
        $venda->datavenda= $request->datavenda;
        $venda->save();

        return redirect('/vendas/index');
    }

    
    public function edit($id){
        $venda = Venda::findorFail($id);
        return view('venda.edit', ['venda'=>$venda]);
    }

    public function update(Request $request){
        Venda::find($request->id)->update($request->except('_method'));
        return redirect('venda/index')->with('msg', 'venda atualizada');
    }
    
    public function destroy($id){
        Venda::findorFail($id)->delete();
        return redirect('venda/index')->with('msg', 'venda excluída com sucesso');
    }

}