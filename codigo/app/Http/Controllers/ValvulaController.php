<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreValvulaRequest;
use Illuminate\Http\Request;
use App\Models\Valvula;

class ValvulaController extends Controller
{
    
    public function index()
    {
        $valvula = Valvula::all();
        return view('valvula.index', ['valvula' => $valvula]);
    }
   

    public function create()
    {
        return view('valvula.create');
    }

    public function store(StoreValvulaRequest $request)
    {
        $valvula = new Valvula();
        $valvula->nome = $request->nome;
        $valvula->endereco = $request->endereco;
        $valvula->debito = $request->debito;
        $valvula->save();

        return redirect('valvula/');

    }
        
    public function show($id)
    {
        if($id)
        {
            $valvula = Valvula::where('id', $id)->get();
        }else{
            $valvula = Valvula::all();
        }
        return view('valvula.show', ['valvula'=>$valvula]);
    }
    public function edit($id)
    {
        $valvula = Valvula::findorFail($id);
        return view('valvula.edit', ['valvula'=>$valvula]);
    }

    public function update(StoreValvulaRequest $request)
    {
        Valvula::find($request->id)->update($request->except('_method'));
        return redirect('valvula/')->with('msg', 'Valvula atualizado');
    }
    
    public function destroy($id)
    {
        Valvula::findorFail($id)->delete();
        return redirect('valvula/')->with('msg', 'Valvula excluído com sucesso');
    }

}
