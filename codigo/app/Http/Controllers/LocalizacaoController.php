<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocalizacaoRequest;
use Illuminate\Http\Request;
use App\Models\Localizacao;

class LocalizacaoController extends Controller
{

    public function index()
    {
        $localizacao = Localizacao::all();
        return view('localizacao.index', ['localizacao' => $localizacao]);
    }
   

    public function create()
    {
        return view('localizacao.create');
    }

    public function store(StoreLocalizacaoRequest $request)
    {
        $localizacao = new Localizacao();
        $localizacao->departamento = $request->departamento;
        $localizacao->save();

        return redirect('localizacao/');

    }

        
    public function show($id)
    {
        if($id)
        {
            $localizacao = Localizacao::where('id', $id)->get();
        }else{
            $localizacao = Localizacao::all();
        }
        return view('localizacao.show', ['localizacao'=>$localizacao]);
    }

    public function edit($id)
    {
        $localizacao = Localizacao::findorFail($id);
        return view('localizacao.edit', ['localizacao'=>$localizacao]);
    }

    public function update(StoreLocalizacaoRequest $request)
    {
        Localizacao::find($request->id)->update($request->except('_method'));
        return redirect('localizacao/')->with('msg', 'Localizacao atualizado');
    }
    
    public function destroy($id)
    {
        Localizacao::findorFail($id)->delete();
        return redirect('localizacao/')->with('msg', 'Localizacao excluído com sucesso');
    }

  
}
