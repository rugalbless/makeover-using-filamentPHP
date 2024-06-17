<?php

declare(strict_types=1);


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Escola extends Model
{
    protected $fillable = [
        'status',
        'inep',
        'endereco',
        'nome'
    ];

    public function turma():HasMany
    {
        return $this->hasMany(Turma::class);
    }

    public function professor():HasMany
    {
        return $this->hasMany(Professor::class);
    }

}
