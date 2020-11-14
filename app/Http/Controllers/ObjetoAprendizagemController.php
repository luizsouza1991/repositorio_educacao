<?php

namespace App\Http\Controllers;

use App\ObjetoAprendizagem;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ObjetoAprendizagemController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->autor == 'self' && !$request->autores) {
            $data['autores'] = Auth::user()->name;
        }
        
        $data['arquivo'] = $data['arquivo']->store('files');

        ObjetoAprendizagem::create(Arr::except($data, ['autor']));

        session()->flash('msg', 'Cadastro realizado com sucesso');

        return redirect()->route('home');
    }

    public function create()
    {
        return view('objetos-aprendizagem.form');
    }

    public function show($id)
    {
        $objeto = ObjetoAprendizagem::find($id);
        return view('objetos-aprendizagem.show', [
            'objeto' => $objeto
        ]);
    }
}
