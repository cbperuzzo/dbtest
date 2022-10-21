<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Emprestimo;

class Livros extends Model
{
    use HasFactory;

    public function emprestimo(){

        return $this->hasMany(Emprestimo::class,'idLivro','id');

    }
}
