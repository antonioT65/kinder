<?php

namespace App\Http\Controllers;

use App\Notas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index(){
        return view('notas.todas.index',['notas'=>Notas::all()->where('user_id',auth()->id())]);
    }

    public function edit($id){
        return view('notas.todas.edit',['nota'=>Notas::findOrFail($id)]);
    }
    public function update(Request $request, $id)
    {
        $nota= Notas::findOrFail($id);
        $nota->titulo = $request->get('titulo');
        $nota->texto = $request->get('texto');

        $nota->update();
        return redirect('notas/todas');
    }

    public function store(Request $request){
        $notas = new Notas();
        $notas->titulo=request('titulo');
        $notas->texto=request('texto');
        $notas->user_id=auth()->id();

        $notas->save();
        return redirect('notas/todas');
    }
    public function destroy($id){
        $nota=Notas::findOrFail($id);
        $nota->delete();
        return redirect('notas/todas');
    }

    public function favoritas(){
        return view('notas.favoritas');
    }

    public function archivadas(){
        return view('notas.archivadas');
    }
}
