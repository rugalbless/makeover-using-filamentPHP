<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('turma_professor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professor_id');
            $table->unsignedBigInteger('turma_id');

            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');

        });
    }


    public function down(): void
    {
        Schema::table('turma_professor', function (Blueprint $table) {
            $table->dropForeign(['professor_id']);
            $table->dropForeign(['turma_id']);
        });

        Schema::dropIfExists('turma_professor');
    }
};
