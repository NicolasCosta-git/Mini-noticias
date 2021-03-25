<?php

namespace App\Http\Controllers;

use App\Models\noticias;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function store(Request $request)
    {
        $data = ['titulo' => $request->input('titulo'), 'noticia' => $request->input('noticia'), 'idUser' => Auth::id()];
        $request->validate(['titulo' => 'required', 'noticia' => 'required']);
        noticias::create($data);
        return redirect()->back()->with('message', 'Notícia publicada!!');
    }
    public function create()
    {
        return view('write');
    }

    public function index()
    {
        $noticias = noticias::all();
        return view('dashboard')->with(['noticias' => $noticias]);
    }

    public function edit($id){
        
        $noticias = noticias::find($id);
        return view('edit', compact('noticias'));
    }

    public function update($id){

        
    }
}
