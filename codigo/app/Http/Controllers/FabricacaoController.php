<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fabricacao;
use App\Http\Requests\StoreFabricacaoRequest;

class FabricacaoController extends Controller
{

    public function index()
    {
        $fabricacao = Fabricacao::all();
        return view('fabricacao.index', ['fabricacao' => $fabricacao]);
    }
   

    public function create()
    {
        return view('fabricacao.create');
    }

    public function store(StoreFabricacaoRequest $request)
    {
        $fabricacao = new Fabricacao();
        $fabricacao->ano = $request->ano;
        $fabricacao->save();

        return redirect('fabricacao/');

    }

        
    public function show($id)
    {
        if($id)
        {
            $fabricacao = Fabricacao::where('id', $id)->get();
        }else{
            $fabricacao = Fabricacao::all();
        }
        return view('fabricacao.show', ['fabricacao'=>$fabricacao]);
    }

    public function edit($id)
    {
        $fabricacao = Fabricacao::findorFail($id);
        return view('fabricacao.edit', ['fabricacao'=>$fabricacao]);
    }

    public function update(StoreFabricacaoRequest $request)
    {
        Fabricacao::find($request->id)->update($request->except('_method'));
        return redirect('fabricacao/')->with('msg', 'Fabricacao atualizado');
    }
    
    public function destroy($id)
    {
        Fabricacao::findorFail($id)->delete();
        return redirect('fabricacao/')->with('msg', 'Fabricacao excluído com sucesso');
    }

}
