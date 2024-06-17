<?php

declare(strict_types=1);


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Professor extends Model
{
    protected $fillable = ['nome'];

    public function turmas(): BelongsToMany
{
    return $this->belongsToMany(Turma::class, 'turmas_professors');
}


}
