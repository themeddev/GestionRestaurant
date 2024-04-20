<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('serveur_id');
            $table->integer('numero_table')->unsigned()->nullable();
            $table->enum('etat', ['en cours', 'terminé', 'servi ou emporté'])->default('en cours');
            $table->boolean('payé')->default(false);
            $table->timestamps();

            $table->foreign('serveur_id')->references('id')->on('serveurs')->onDelete('cascade');
            $table->index('id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
