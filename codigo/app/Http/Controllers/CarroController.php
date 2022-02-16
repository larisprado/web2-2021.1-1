<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarroRequest;
use Illuminate\Http\Request;
use App\Models\Carro;
use App\Models\Database;


class CarroController extends Controller
{

    public function index()
    {
        $carro = Carro::all();
        return view('carro.index', ['carro' => $carro]);
    }
    
    public function create()
    {
        return view('carro.create');
    }

    public function store(StoreCarroRequest $request)
    {
        $carro = new Carro();
        $carro->idCarro = $request->idCarro;
        $carro->modelo = $request->modelo;
        $carro->save();

        return redirect('carro/');

    }

    public function show($id)
    {
        if($id)
        {
            $carro = Carro::where('idCarro', $id)->get();
        }else{
            $carro = Carro::all();
        }
        return view('carro.show', ['carro'=>$carro]);
    }

    public function edit($id)
    {
        $carro = Carro::findorFail($id);
        return view('carro.edit', ['carro'=>$carro]);
    }

    // public function update(StoreCarroRequest $request)
    // {
    //     Carro::find($request->id)->update($request->except('_method'));
    //     return redirect('carro/')->with('msg', 'Carro atualizado');
    // }
    
    // public function destroy($id)
    // {
    //     Carro::findorFail($id)->delete();
    //     return redirect('carro/')->with('msg', 'Carro excluído com sucesso');
    // }

    
}
