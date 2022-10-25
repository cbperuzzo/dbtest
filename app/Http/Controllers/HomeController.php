<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Livros;
use App\Models\Emprestimo;
use App\Models\Contato;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $livros = Livros::count(); 
        $emp = Emprestimo::count();
        $contatos = Contato::count();
        return view('home',array('nlivros'=>$livros,'nemprestimos'=>$emp,'ncontatos'=>$contatos));
    }
}
