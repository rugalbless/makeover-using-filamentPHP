<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('escolas', function (Blueprint $table) {
            $table->id();
            $table->string('status', 50);
            $table->string('inep', 12)->unique();
            $table->string('endereco', 255);
            $table->string('nome', 255);
            $table->timestamps();
        });

    }


    public function down(): void
    {
        Schema::dropIfExists('escolas');
    }
};
