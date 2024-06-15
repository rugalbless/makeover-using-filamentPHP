<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('escola_id');
            $table->string('status');
            $table->string('turno');
            $table->string('nome');
            $table->timestamps();

            $table->foreign('escola_id')->references('id')->on('escolas');
        });
    }

    public function down(): void
    {
        Schema::table('turmas', function (Blueprint $table) {
            $table->dropForeign(['escola_id']);
        });

        Schema::dropIfExists('turmas');
    }
};
