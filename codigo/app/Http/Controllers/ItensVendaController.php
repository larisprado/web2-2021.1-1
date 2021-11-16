<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensVenda;
use App\Http\Requests\StoreClienteRequest;
class ItensVendaController extends Controller
{
    //
    public function show(){
        $vendas = ItensVenda::all();
        echo $vendas;
    }

    public function index(){
        $itensvendas = ItensVenda::all();
        return view('itensvenda.index', ['itensvendas'=>$itensvendas]);
    }
    public function create(){
        return view('itensvenda.create'); 
    }

    public function store(StoreClienteRequest $request)
    {
        $itensvenda = new ItensVenda();
        $itensvenda->idvenda = $request->idvenda;
        $itensvenda->quantidade= $request->quantidade;
        $itensvenda->save();

        return redirect('/itensvendas/index');
    }

    
    public function edit($id){
        $itensvenda = ItensVenda::findorFail($id);
        return view('itensvenda.edit', ['itensvenda'=>$itensvenda]);
    }

    public function update(Request $request){
        ItensVenda::find($request->id)->update($request->except('_method'));
        return redirect('itensvenda/index')->with('msg', 'itensvenda atualizada');
    }
    
    public function destroy($id){
        ItensVenda::findorFail($id)->delete();
        return redirect('itensvenda/index')->with('msg', 'itensvenda excluída com sucesso');
    }

}