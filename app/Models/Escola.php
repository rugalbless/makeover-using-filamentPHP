<?php

declare(strict_types=1);


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;

    protected $fillable =[
        'status',
        'inep',
        'endereco',
        'nome',
    ];

    public function turmas (){
        return $this->hasMany(Turma::class, 'escola_id');
    }

    public function professores()
    {
        return $this->hasMany(Professor::class, 'escola_id');
    }

}
