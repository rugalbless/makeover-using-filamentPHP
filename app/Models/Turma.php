<?php

declare(strict_types=1);


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Turma extends Model
{
    protected $fillable = [
        'status',
        'turno',
        'nome',
        'escola_id'
    ];

    public function escola(): BelongsTo
    {
        return $this->belongsTo(Escola::class);
    }

    public function professor(): BelongsToMany
    {
        return $this->belongsToMany(Professor::class, 'turmas_professors');
    }

}
