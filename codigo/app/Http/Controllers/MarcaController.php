<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarcaRequest;
use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{

    public function index()
    {
        $marca = Marca::all();
        return view('marca.index', ['marca' => $marca]);
    }
   

    public function create()
    {
        return view('marca.create');
    }

    public function store(StoreMarcaRequest $request)
    {
        $marca = new Marca();
        $marca->marca = $request->marca;
        $marca->save();

        return redirect('marca/');

    }

        
    public function show($id)
    {
        if($id)
        {
            $marca = Marca::where('id', $id)->get();
        }else{
            $marca = Marca::all();
        }
        return view('marca.show', ['marca'=>$marca]);
    }

    public function edit($id)
    {
        $marca = Marca::findorFail($id);
        return view('marca.edit', ['marca'=>$marca]);
    }

    public function update(StoreMarcaRequest $request)
    {
        Marca::find($request->id)->update($request->except('_method'));
        return redirect('marca/')->with('msg', 'Marca atualizado');
    }
    
    public function destroy($id)
    {
        Marca::findorFail($id)->delete();
        return redirect('marca/')->with('msg', 'Marca excluído com sucesso');
    }

}
