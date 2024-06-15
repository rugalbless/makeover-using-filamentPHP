<?php

declare(strict_types=1);


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_escola',
        'status',
        'turno',
        'nome',
    ];

    public function escola(){
        return $this->belongsTo(Escola::class, 'id_escola');
    }

    public function professores(){
        return $this->hasMany(Professor::class, 'id_turma');
    }

}
