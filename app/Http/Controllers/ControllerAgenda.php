<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ModelAgenda;

class ControllerAgenda extends Controller
{
    public function MostrarContato(Request $request){

        $dadosagenda = ModelAgenda::query();
        $dadosagenda = $dadosagenda->get();

        return view('index',['dadosagenda'=>$dadosagenda]); 
    }
}
