<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormaPagamentoRequest;
use Illuminate\Http\Request;
use App\Models\FormaPagamento;

class FormaPagamentoController extends Controller
{
    

    public function index()
    {
        $formaPagamento = FormaPagamento::all();
        return view('formaPagamento.index', ['formaPagamento' => $formaPagamento]);
    }
   

    public function create()
    {
        return view('formaPagamento.create');
    }

    public function store(StoreFormaPagamentoRequest $request)
    {
        $formaPagamento = new FormaPagamento();
        $formaPagamento->condicao = $request->condicao;
        $formaPagamento->forma = $request->forma;
        $formaPagamento->save();

        return redirect('formaPagamento/');

    }

        
    public function show($id)
    {
        if($id)
        {
            $formaPagamento = FormaPagamento::where('id', $id)->get();
        }else{
            $formaPagamento = FormaPagamento::all();
        }
        return view('formaPagamento.show', ['formaPagamento'=>$formaPagamento]);
    }

    public function edit($id)
    {
        $formaPagamento = FormaPagamento::findorFail($id);
        return view('formaPagamento.edit', ['formaPagamento'=>$formaPagamento]);
    }

    public function update(StoreFormaPagamentoRequest $request)
    {
        FormaPagamento::find($request->id)->update($request->except('_method'));
        return redirect('formaPagamento/')->with('msg', 'Forma de Pagamento atualizado');
    }
    
    public function destroy($id)
    {
        FormaPagamento::findorFail($id)->delete();
        return redirect('formaPagamento/')->with('msg', 'Forma de Pagamento excluído com sucesso');
    }

 
}
