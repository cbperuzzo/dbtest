<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Contato;
use App\models\Livro;

define('PRAZO_EMPRESTIMO',15);

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
    public function getDevolvidoAttribute() {
        // Usando assessador
        $prazodevolucao = \Carbon\Carbon::create($this->dataHora)->addDays(PRAZO_EMPRESTIMO);
        $atrasado = $prazodevolucao < \Carbon\Carbon::now()?" - Atrasado":"";
        $devolvido = $this->dataDevolucao == null?"Previsto: ".$prazodevolucao->format('d/m/Y').$atrasado:\Carbon\Carbon::create($this->datadevolucao)->format('d/m/Y H:i:s') . " - entregue";
        return $devolvido;
    }
    
}
