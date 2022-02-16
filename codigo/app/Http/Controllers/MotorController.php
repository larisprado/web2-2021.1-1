<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMotorRequest;
use Illuminate\Http\Request;
use App\Models\Motor;

class MotorController extends Controller
{

    public function index()
    {
        $motor = Motor::all();
        return view('motor.index', ['motor' => $motor]);
    }
   

    public function create()
    {
        return view('motor.create');
    }

    public function store(StoreMotorRequest $request)
    {
        $motor = new Motor();
        $motor->potencia = $request->potencia;
        $motor->save();

        return redirect('clientes/');

    }
    public function show($id)
    {
        if($id)
        {
            $motor = Motor::where('id', $id)->get();
        }else{
            $motor = Motor::all();
        }
        return view('motor.show', ['motor'=>$motor]);
    }

    public function edit($id)
    {
        $motor = Motor::findorFail($id);
        return view('motor.edit', ['motor'=>$motor]);
    }

    public function update(StoreMotorRequest $request)
    {
        Motor::find($request->id)->update($request->except('_method'));
        return redirect('motor/')->with('msg', 'Motor atualizado');
    }
    
    public function destroy($id)
    {
        Motor::findorFail($id)->delete();
        return redirect('motor/')->with('msg', 'Motor excluído com sucesso');
    }

}
