<?php

namespace App\Http\Controllers;

use App\Models\noticias;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $id = Auth::id();
        $noticias = noticias::all();
        return view('dashboard')->with(['noticias' => $noticias, 'uid' => $id]);
    }

    public function edit($id)
    {

        $noticias = noticias::find($id);
        return view('edit', compact('noticias'));
    }

    public function update(Request $request, noticias $id)
    {

        $id->update(['titulo' => $request->titulo, 'noticia' => $request->noticia]);
        $request->validate(['titulo' => 'required', 'noticia' => 'required']);
        return redirect()->back()->with('message', 'Notícia atualizada!!');
    }

    public function delete(noticias $id)
    {
        $id->delete();
        return redirect()->back();
    }

    public function search(Request $field)
    {
        $results = noticias::where('titulo', 'like', '%' . $field->pesquisa . '%')->get();
        return view('search')->with(['noticias' => $results, 'uid' => Auth::id()]);
    }
}
