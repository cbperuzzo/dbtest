<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Livros;

class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $livros =  Livros::simplepaginate(5);
        return view('livro.index',array('livros'=>$livros,'busca'=>null));
    }

    public function buscar(Request $request) {
        $livros = Livros::where('nome','LIKE','%'.$request->input('busca').'%')->get();
        return view('livro.index',array('livros' => $livros,'busca'=>$request->input('busca')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check() && Auth::user()->isAdmin()){
            $livro = new Livros();
            $livro->nome = $request->input('nome');
            $livro->genero = $request->input('genero');
            $livro->autor = $request->input('autor');
            if($livro->save()) {
                return redirect('contatos');
            }
        }else{
            return redirec('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro = Livros::find($id);
        return view('livro.index',array('livro'=>$livro));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check() && Auth::user()->isAdmin()){
            $livro = Livros::find($id);
            return view('livro.edit',array('livro'=>$livro));
        }else{
            return redirec('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::check() && Auth::user()->isAdmin()){
            $livro = Livros::find($id);
            $livro->autor = $request->input('autor');
            $livro->nome = $request->input('nome');
            $livro->genero = $request->input('genero');
            if($livro->save()){
                return redirect('/livros');
            }
        }else{
            return redirec('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check() && Auth::user()->isAdmin()){
            $livro = Livros::find($id);
            $livro->delete();
            return redirect(url('livros/'));
        }else{
            return redirec('login');
        }
    }
}
