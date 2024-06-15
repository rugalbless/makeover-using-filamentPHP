<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->foreignId('id_escola')->constrained('escolas')->onDelete('cascade');
            $table->foreignId('turma_id')->constrained('turmas')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::table('turma_professor', function (Blueprint $table) {
            $table->dropForeign(['professor_id']);
            $table->dropForeign(['turma_id']);
        });

        Schema::dropIfExists('professors');    }

};
