<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\models\Emprestimo;

class Contato extends Model
{
    use HasFactory;

    public function emprestimo(){

        return $this->hasMany(Emprestimo::class,'idContato','id');

    }
}
