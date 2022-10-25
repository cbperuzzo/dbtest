<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contato;

class ContatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::paginate(5);
        return view('contato.index',array('contatos' => $contatos,'busca'=>null));
    }

    public function buscar(Request $request) {
        $contatos = Contato::where('nome','LIKE','%'.$request->input('busca').'%')->get();
        return view('contato.index',array('contatos' => $contatos,'busca'=>$request->input('busca')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $contato = new Contato();
            $contato->nome = $request->input('nome');
            $contato->cidade = $request->input('cidade');
            $contato->estado = $request->input('estado');
            if($contato->save()) {
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
        $contato = Contato::find($id);
        return view('contato.show',array('contato' => $contato));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()){
            $contato = Contato::find($id);
            return view('contato.edit',array('contato' => $contato));
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
        if(Auth::check()){
            $contato = Contato::find($id);
            $contato->nome = $request->input('nome');
            $contato->cidade = $request->input('cidade');
            $contato->estado = $request->input('estado');
            if($contato->save()) {
                return redirect(url('contatos/'.$contato->id));
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
        if(Auth::check()){
            $contato = Contato::find($id);
            $contato->delete();
            return redirect(url('contatos/'));
        }else{
            return redirec('login');
        }
    }
}
