<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaRequest;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Database;

class CategoriaController extends Controller
{

    public function index()
    {
        $categoria = Categoria::all();
        return view('categoria.index', ['categoria' => $categoria]);
    }
    
    public function create()
    {
        return view('categoria.create');
    }

    public function store(StoreCategoriaRequest $request)
    {
        $categoria = new Categoria();
        $categoria->idCategoria = $request->idCategoria;
        $categoria->categoria = $request->categoria;
        $categoria->save();

        return redirect('categoria/');

    }
    public function show($id)
    {
        if($id)
        {
            $categoria = Categoria::where('idCategoria', $id)->get();
        }else{
            $categoria = Categoria::all();
        }
        return view('categoria.show', ['categoria'=>$categoria]);
    }

    public function edit($id)
    {
        $categoria = Categoria::findorFail($id);
        return view('categoria.edit', ['categoria'=>$categoria]);
    }
    public function update(StoreCategoriaRequest $request)
    {
        Categoria::find($request->id)->update($request->except('_method'));
        return redirect('categoria/')->with('msg', 'Categoria atualizado');
    }
    
    public function destroy($id)
    {
        Categoria::findorFail($id)->delete();
        return redirect('categoria/')->with('msg', 'Categoria excluído com sucesso');
    }

}
