<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensEntrada;
use App\Http\Requests\StoreItensEntradaRequest;
class ItensEntradaController extends Controller
{
    
    public function show(){
        $entradas = ItensEntrada::all();
        echo $entradas;
    }

    public function index(){
        $entradas = ItensEntrada::all();
        return view('entrada.index', ['entradas'=>$entradas]);
    }
    public function create(){
        return view('entrada.create'); 
    }

    //tabela (identrada, idproduto, precocompra, quantidade, unidade, ipi, frete, icms)
    public function store(StoreItensEntradaRequest $request)
    {
        $itensentrada = new ItensEntrada();
        $itensentrada->identrada = $request->identrada;
        $itensentrada->idproduto = $request->idproduto;
        $itensentrada->precocompra = $request->precocompra;
        $itensentrada->quantidade = $request->quantidade;
        $itensentrada->unidade = $request->unidade;
        $itensentrada->ipi = $request->ipi;
        $itensentrada->frete = $request->frete;

        $itensentrada->save();

        return redirect('/entradas/index');
    }

    
    public function edit($id){
        $itensentrada = ItensEntrada::findorFail($id);
        return view('itensentrada.edit', ['itensentrada'=>$itensentrada]);
    }

    public function update(StoreItensEntradaRequest $request){
        ItensEntrada::find($request->id)->update($request->except('_method'));
        return redirect('itensentrada/index')->with('msg', 'itensentrada atualizada');
    }
    
    public function destroy($id){
        ItensEntrada::findorFail($id)->delete();
        return redirect('itensentrada/index')->with('msg', 'itensentrada excluída com sucesso');
    }

}