<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Contato;
use App\models\Livro;

class Emprestimo extends Model
{
    /*
    use HasFactory;

    public function contato($id)
    {
        $cont = Contato::find($id);

        return $cont;
    }
    public function livro($id)
    {
        $liv = Livros::find($id);

        return $liv;
    }
    */
    
    
    public function contato(){
        return $this->belongsTo(Contato::class,'idContato','id');

    }

    public function livro(){
         return $this->belongsTo(livros::class,'idLivro','id');
        
    }
    
}
