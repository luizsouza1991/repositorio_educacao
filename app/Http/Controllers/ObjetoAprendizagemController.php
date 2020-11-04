<?php

namespace App\Http\Controllers;

use App\ObjetoAprendizagem;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class ObjetoAprendizagemController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();

        $data['user_id'] = $user->id;

        $objeto = ObjetoAprendizagem::create($data);

        session()->flash('msg', 'Cadastro realizado com sucesso');

        return redirect()->route('home');
    }
}
