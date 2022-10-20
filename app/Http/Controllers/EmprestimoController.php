<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use App\Models\Contato;
use App\Models\Livros;

use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function index()
    {
        $emprestimo = Emprestimo::paginate(5);
        return view('emprestimo.index',array('emprestimo'=>$emprestimo));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contatos=Contato::all();
        $livros=Livros::all();
        return view('emprestimo.create',array('contatos'=>$contatos,'livros'=>$livros));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emprestimo = new Emprestimo();
        $emprestimo->idLivro = $request->input('idLivro');
        $emprestimo->idContato = $request->input('idContato');
        $emprestimo->dataHora = \Carbon\Carbon::createFromFormat('d/m/Y H:i:s',$request->input('datahora'));
        $emprestimo->dataDevolucao = null;
        $emprestimo->obs = $request->input('obs');
        if($emprestimo->save()){
            return redirect('emprestimos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Emprestimo::find($id);
        return view('emprestimo.show', array('emprestimo'=>$id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function edit(Emprestimo $emprestimo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emprestimo $emprestimo)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emprestimo $id)
    {
        $emprestimo = Emprestimo::find($id);
        $emprestimo->delete();
        return redirect(url('emprestimos'));
    }
}
